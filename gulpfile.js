
// required plugin files
var gulp = require('gulp'),
		concat = require('gulp-concat'),
		rename = require('gulp-rename'),
		uglify = require('gulp-uglify'),
		concatCss = require('gulp-concat-css')
		browserSync = require('browser-sync'),
		clean = require('gulp-clean'),
		runSequence = require('run-sequence'),
		minifyCss = require('gulp-minify-css'),
    connect = require('gulp-connect-php'),
    stripDebug = require('gulp-strip-debug');


// Clean the dist folder
gulp.task('clean', function () {
    return gulp.src('dist/', {read: false})
        .pipe(clean());
});


// Concatenate and minify js
gulp.task('scripts', function() {
	return gulp.src(['js/bootstrap.min.js','js/jquery.fancybox.pack.js','js/script.js'])
	  .pipe(concat('script.js'))
    .pipe(stripDebug())
	  .pipe(rename({suffix: '.min'}))
	  .pipe(uglify())
	  .pipe(gulp.dest('dist/js'));
});


// Concatenate css
gulp.task('css', function(){
	return gulp.src(['css/bootstrap.css','css/font-awesome.css','css/style.css', 'js/jquery.fancybox.css'])
    .pipe(concatCss("style.css"))
    .pipe(minifyCss())
    .pipe(gulp.dest('dist/css'));
});


// Copy files to the dist folder
gulp.task('copy', function() {
    gulp.src(['js/blank.gif', 'js/fancybox_loading.gif', 'js/fancybox_loading@2x.gif',
              'js/fancybox_overlay.png', 'js/fancybox_sprite.png', 'js/fancybox_sprite@2x.png'])
        .pipe(gulp.dest('dist/js'))
});


// Serve the project and set up browser sync
gulp.task('connect', function() {
  connect.server({}, function (){
    browserSync({
      proxy: 'localhost:8888/grameen'
    });
  });

  gulp.watch(['js/*.js','css/*.css'], ['scripts','css']);
  gulp.watch(['*.php','includes/*.php', 'dist/css/*.css', 'dist/js/*.js']).on('change', function () {
    browserSync.reload();
  });
});


// Serve the project. Call from the command line using 'gulp'
gulp.task('default', function(callback) {
  runSequence('clean',
              ['scripts','css','copy'],
              'connect',
              callback);
});

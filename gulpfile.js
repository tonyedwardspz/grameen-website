
// required plugin files
var gulp = require('gulp'),
		concat = require('gulp-concat'),
		rename = require('gulp-rename'),
		uglify = require('gulp-uglify'),
		concatCss = require('gulp-concat-css'),
		connect = require('gulp-connect-php'),
		uncss = require('gulp-uncss'),
		browserSync = require('browser-sync'),
		clean = require('gulp-clean'),
		runSequence = require('run-sequence'),
		minifyCss = require('gulp-minify-css');


// Clean the dist folder
gulp.task('clean', function () {
    return gulp.src('dist/', {read: false})
        .pipe(clean());
});


// Concatenate and minify js
gulp.task('scripts', function() {
	return gulp.src(['js/bootstrap.min.js','js/jquery.fancybox.pack.js','js/script.js'])
	  .pipe(concat('script.js'))
	  .pipe(rename({suffix: '.min'}))
	  .pipe(uglify())
	  .pipe(gulp.dest('dist/js'));
});


// Concatenate css
gulp.task('css', function(){
	return gulp.src(['css/bootstrap.css','css/font-awesome.css','css/style.css'])
    .pipe(concatCss("style.css"))
    .pipe(gulp.dest('dist/css'));
});


// Serve the project and set up browser sync
gulp.task('connect', function() {
  connect.server({}, function (){
    browserSync({
      proxy: 'localhost:8000'
    });
  });
 
  gulp.watch(['*.php', 'dist/css/*.css', 'dist/js/*.js']).on('change', function () {
    browserSync.reload();
  });
});


// Remove uneeded CSS and minify
gulp.task('uncss', function() {
  return gulp.src('dist/css/style.css')
    .pipe(uncss({
       html: ['http://localhost:3000',
       				'http://localhost:3000/restaurant.php',
       				'http://localhost:3000/takeaway.php',
       				'http://localhost:3000/contact.php',
       				'http://localhost:3000/attractions.php',
       				'http://localhost:3000/privacy.php'
       			 ]
    }))
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist/css'));
});


// Serve the project. Call from the command line using 'gulp'
gulp.task('default', function(callback) {
  runSequence('clean',
              ['scripts','css'],
              'connect',
              'uncss',
              callback);
});

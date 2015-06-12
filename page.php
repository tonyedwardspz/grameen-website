<?php
$metaTag = 'This is an example of a meta description. This will often show up in search results.';
$title = 'Grameen Tandoori';

include 'header.php';
?>

    <div class="container">

      <!-- PAGE TITLE -->
      <div class="blog-header">
        <h1 class="blog-title">Page Title</h1>
      </div>

      <div class="row">
      <div class="col-sm-8 blog-main">

      <!-- PAGE CONTENT -->
      <div class="blog-post">
        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
      </div><!-- /.blog-post -->


      </div><!-- /.blog-main -->

      <!-- SIDEBAR -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
      </div>

      <!-- FANCYBOX Images -->
      <div class="col-sm-3">
          <a class="fancybox" rel="group" href="images/1_b.jpg"><img src="images/1_s.jpg" alt="pretty pic" /></a>
     </div>
      <div class="col-sm-3">
          <a class="fancybox" rel="group" href="images/2_b.jpg"><img src="images/2_s.jpg" alt="prettier pic" /></a>
     </div>
      <div class="col-sm-3">
          <a class="fancybox" rel="group" href="images/3_b.jpg"><img src="images/3_s.jpg" alt="pretty pic 3" /></a>
      </div>
      <div class="col-sm-3">
          <a class="fancybox" rel="group" href="images/4_b.jpg"><img src="images/4_s.jpg" alt="pretty pic4" /></a>
        
      </div>

      
<?php
include 'footer.php';
?>

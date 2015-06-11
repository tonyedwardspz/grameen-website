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


     

        <!-- MJC FANCYBOX -->
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="js/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="js/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="js/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <link rel="stylesheet" href="js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!-- FANCYBOX Images -->
        <p>
          <a class="fancybox" rel="group" href="images/1_b.jpg"><img src="images/1_s.jpg" alt="pretty pic" /></a>
          <a class="fancybox" rel="group" href="images/2_b.jpg"><img src="images/2_s.jpg" alt="prettier pic" /></a>
          <a class="fancybox" rel="group" href="images/3_b.jpg"><img src="images/3_s.jpg" alt="pretty pic 3" /></a>
          <a class="fancybox" rel="group" href="images/4_b.jpg"><img src="images/4_s.jpg" alt="pretty pic4" /></a>
          <a class="fancybox" rel="group" href="images/5_b.jpg"><img src="images/5_s.jpg" alt="pretty pic 5" /></a>
        </p>

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





     
<?php
include 'footer.php';
?>

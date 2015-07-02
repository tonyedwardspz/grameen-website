<?php
include './includes/functions.php';

// Metatag variables variables
$pageTitle = 'Takeaway';
$pageDescription = 'The Grameen Tandoori Indian Takeaway in Hayle, Cornwall, View our full menu online and order by phone. Delivery available';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'takeaway';


include './includes/header.php';
?>

    <div class="container">

      <!-- PAGE TITLE -->
      <div class="blog-header">
        <h1 class="blog-title"><?php echo $pageTitle; ?></h1>
      </div>

      <div class="row">
        <div class="col-sm-8 blog-main">

          <!-- PAGE CONTENT -->
          <div class="blog-post">
            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
          </div><!-- /.blog-post -->
          <div class="dlmargin">
            <div class="row">
              <div class="col-sm-6">
                <a class="btn btn-default" href="images/takeawaymenu/Grameen-takeaway-menu-dl.pdf" title="Download PDF Menu" role="button" target="_blank" >Download Menu PDF »</a>
              </div>
              <div class="col-sm-6">
                <a class="btn btn-default" href="images/takeawaymenu/grameen-takeaway-menu-dl.jpg" title="Download Menu Image" role="button" target="_blank" >Download Menu Image »</a>
              </div>
            </div>
          </div>

          <!-- Menu 'thumbs' -->
          <div class="row">
            <div class="col-sm-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-outside.jpg" title="Grameen Tandoori, Hayle, Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-1.jpg" alt="Grameen Hayle takeaway menu 1">
              </a>
            </div>
            <div class="col-sm-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-inside.jpg"  title="Grameen Tandoori, Hayle, Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-2.jpg" alt="Grameen Hayle takeaway menu 2">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-inside.jpg"  title="Grameen Tandoori, Hayle, Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-3.jpg" alt="Grameen Hayle takeaway menu 3">
              </a>
            </div>
            <div class="col-sm-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-outside.jpg"  title="Grameen Tandoori, Hayle, Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-4.jpg" alt="Grameen Hayle takeaway menu 4">
              </a>
            </div>
          </div>
        </div><!-- /.blog-main -->

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

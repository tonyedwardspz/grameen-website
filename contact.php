<?php
include './includes/functions.php';

// Metatag variables
$pageTitle = 'Contact Details';
$pageDescription = 'Contact details for the Grameen Tandoori Indian Takeaway and Restaurant. Book  table or place a takeaway order.';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'contact';


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


        </div><!-- /.blog-main -->

<?php
include './includes/sidebar.php';
include './includes/fancy_images.php';
include './includes/footer.php';
?>

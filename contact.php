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
            <p>To book a table or to place a takeaway order, please contact us on the phone number below.</p>
            <h3>01736 758470</h3>
          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

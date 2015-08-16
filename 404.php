<?php
include './includes/functions.php';

$pageTitle = '404 Error';
$pageDescription = 'The Grameen Tandoori is a Contempary Indian Restaurant with fresh, quality food expertly prepared. View our full menu.';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'restaurant';

include './includes/header.php';
?>
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo $pageTitle; ?></h1>
      </div>

      <div class="row">
        <div class="col-sm-8 blog-main">

          <p>We're really sorry but something went wrong. Our web developer will be told off shortly.</p>
          <p>In the mean time, would you like to visit the <a href="http://www.grameentandoori.co.uk" title="Homepage">homepage</a>.</p>
        </div>

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

<?php
include './includes/functions.php';

$pageTitle = 'The Restaurant';
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

          <p>The Grameen Tandoori restaurant is situated on Hayle Terrace overlooking Hayle estuary. The unassuming exterior opens up into a wonderful and commentary Indian dining experience.</p>
          <p>The restaurant offers excellent Bangladeshi Tandoori which is prepared by our highly experienced team using only the freshest ingredients and the best spices.</p>
          <p>The restaurant has disabled facilities</p>

          <div class="row">
            <div class="col-xs-12 download-buttons">
              <a class="btn btn-default" href="images/restaurantmenu/Grameen-restaurant-menu-dl.pdf" download="Grameen_Restaurant_Menu" title="Download Restaurant Menu (PDF)" role="button">Download Menu (PDF)</a>
              <a class="btn btn-default" href="images/restaurantmenu/grameen-restaurant-menu-dl.jpg" download="Grameen_Restaurant_Menu" title="Download Restaurant Menu (PNG)" role="button">Download Menu (PNG)</a>
            </div>
          
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/restaurantmenu/grameen-restaurant-outside-lg.jpg" title="Grameen Tandoori Restaurant Menu" >
                <img src="images/restaurantmenu/grameen-restaurant-1-lg.jpg" alt="Restaurant menu 1">
              </a>
            </div>
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/restaurantmenu/grameen-restaurant-inside-lg.jpg"  title="Grameen Tandoori Restaurant Menu" >
                <img src="images/restaurantmenu/grameen-restaurant-2-lg.jpg" alt="Restaurant menu 2">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/restaurantmenu/grameen-restaurant-inside-lg.jpg"  title="Grameen Tandoori Restaurant Menu" >
                <img src="images/restaurantmenu/grameen-restaurant-3-lg.jpg" alt="Restaurant menu 3">
              </a>
            </div>
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/restaurantmenu/grameen-restaurant-outside-lg.jpg"  title="Grameen Tandoori Restaurant Menu" >
                <img src="images/restaurantmenu/grameen-restaurant-4-lg.jpg" alt="Restaurant menu 4">
              </a>
            </div>
          </div>
        </div>

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

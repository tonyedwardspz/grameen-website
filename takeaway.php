<?php
include './includes/functions.php';

$pageTitle = 'Takeaway';
$pageDescription = 'The Grameen Tandoori Indian Takeaway in Hayle, Cornwall, View our full menu online and order by phone. Delivery available';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'takeaway';

include './includes/header.php';
?>
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo $pageTitle; ?></h1>
      </div>

      <div class="row">
        <div class="col-sm-8 blog-main">
          <p>Our takeaway menu has all of your favourite dishes, freshly prepared by our experienced chefs. 
          The takeaway menu is discounted againt our restaurant menu by at least 20%, offering a great value meal.</p>
          <p>Once your ready, call us on 01736 758470 to place your order.</p>
          <p class="note">Good things take time. During busy periods, food may take slightly longer to perpare. If we expect a delay, we
          will let you know when you place your order.</p>

          <div class="row">
            <div class="col-xs-12 download-buttons">
              <a class="btn btn-default" href="images/takeawaymenu/Grameen-takeaway-menu-dl.pdf" title="Download Takeaway Menu (PDF)" role="button" download="Grameen_Takeaway_Menu">Download Menu (PDF)</a>
              <a class="btn btn-default" href="images/takeawaymenu/grameen-takeaway-menu-dl.jpg" title="Download Takeaway Menu (PNG)" role="button" download="Grameen_Takeaway_Menu">Download Menu (PNG)</a>
            </div>

            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-outside.jpg" title="Grameen Tandoori Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-1.jpg" alt="Grameen Hayle takeaway menu 1">
              </a>
            </div>
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-inside.jpg"  title="Grameen Tandoori Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-2.jpg" alt="Grameen Hayle takeaway menu 2">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-inside.jpg"  title="Grameen Tandoori Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-3.jpg" alt="Grameen Hayle takeaway menu 3">
              </a>
            </div>
            <div class="col-xs-6">
              <a class="fancybox" rel="group" href="images/takeawaymenu/takeaway-large-outside.jpg"  title="Grameen Tandoori Takeaway Menu" >
                <img src="images/takeawaymenu/takeaway-thumb-4.jpg" alt="Grameen Hayle takeaway menu 4">
              </a>
            </div>
          </div>
        </div>

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

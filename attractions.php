<?php
include './includes/functions.php';

// Metatag variables
$pageTitle = 'Local Attractions';
$pageDescription = 'Attractions and beauty spots near the Grameen Tandoori Restaurant, Hayle.';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'attractions';


include './includes/header.php';
?>

    <div class="container">

      <!-- PAGE TITLE -->
      <div class="blog-header">
        <h1 class="blog-title"><?php echo $pageTitle; ?></h1>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-8 attractions-wrapper">

          <div class="col-xs-12 attraction-box">
            <h2>Hayle Estury</h2>
            <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
            <img src="http://placehold.it/350x200">
          </div>

          <div class="col-xs-12 col-sm-6">
            <h2>Paradise Park</h2>
            <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
            <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
          </div>

          <div class="col-xs-12 col-sm-6">
            <h2>The Eden Project</h2>
            <p>Open 7 Days a week including Bank Holidays</p>
            <p>Lunch - 12.00pm to 2.00pm<br>Evening - 5.30pm to 11.30pm</p>
            <p>The Grameen Restaurant has disabled facilities</p>
          </div>

          <div class="col-xs-12 attraction-box">
            <h2>St. Ives</h2>
            <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
            <img src="http://placehold.it/350x200">
          </div>

          <div class="col-xs-12 col-sm-6">
            <h2>Lands End</h2>
            <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
            <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
          </div>

          <div class="col-xs-12 col-sm-6">
            <h2>Geevor Tin Mine</h2>
            <p>Open 7 Days a week including Bank Holidays</p>
            <p>Lunch - 12.00pm to 2.00pm<br>Evening - 5.30pm to 11.30pm</p>
            <p>The Grameen Restaurant has disabled facilities</p>
          </div>

       </div>

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

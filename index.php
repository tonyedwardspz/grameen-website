<?php
include 'includes/functions.php';

// Metatag variables
$pageTitle = 'Indian Restaurant and Takeaway';
$pageDescription = 'Grameen Tandoori - Indian Reastaurant and Takeaway in Hayle, Cornwall';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'home';

include 'includes/header.php';
?>

    <div class="jumbotron">
      <div class="container">
        <h1>The Grameen Tandoori Restaurant</h1>
        <div class="row">
          <div id="jumboText" class="col-sm-8">
            <p>Contempory Indian cuisine,<br/>freshly prepared in the heart of West Cornwall</p>
            <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
          </div>
          <div class="col-sm-4">
            <img id="jumboImage" src="images/home_food.jpg" height="266" width="400">
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-xs-6 col-md-4">
          <h2>Freshly Prepare</h2>
          <p>Our restaurant is situated on Hayle Terrace overlooking Hayle estuary and offers excellent Bangladeshi Tandoori food as both a sit down meal and takeaway.</p>
          <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
          <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
        </div>

        <div class="col-xs-6 col-md-4">
          <h2>Authentic flavors</h2>
          <p>Open 7 Days a week including Bank Holidays</p>
          <p>Lunch - 12.00pm to 2.00pm<br>Evening - 5.30pm to 11.30pm</p>
          <p>The Grameen Restaurant has disabled facilities</p>
       </div>

        <div class="col-md-4 review">
          <h2>Order now</h2>
          <p><?php echo getRandomReview($pageName); ?></p>
          <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
        </div>

      </div>

<?php
include 'includes/footer.php';
?>

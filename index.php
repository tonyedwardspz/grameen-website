<?php
include './includes/functions.php';

// Metatag variables
$pageTitle = 'Indian Restaurant and Takeaway';
$pageDescription = 'Grameen Tandoori - Indian Reastaurant and Takeaway in Hayle, Cornwall';
$pageImageSrc = 'http://placehold.it/280x150';
$pagePath = basename(__FILE__);
$pageName = 'home';

include './includes/header.php';
?>

    <div class="jumbotron">
      <div class="container">
        <h1>The Grameen Tandoori Restaurant</h1>
        <div class="row">
          <div class="col-sm-8">
            <p>Contempory Indian cuisine,<br/> freshly prepared in the heart of West Cornwall</p>
            <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
          </div>
          <div class="col-sm-4">
            <img src="images/food4homepage.jpg" height="266" width="400">
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-md-4">
          <h2>Place an Order</h2>
          <p>Our restaurant is situated on Hayle Terrace overlooking Hayle estuary and offers excellent Bangladeshi Tandoori food as both a sit down meal and takeaway.</p>
          <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
          <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
        </div>

        <div class="col-sm-6 col-md-4">
          <h2>Opening Hours</h2>
          <p>Open 7 Days a week including Bank Holidays</p>
          <p>Lunch - 12.00pm to 2.00pm<br>Evening - 5.30pm to 11.30pm</p>
          <p>The Grameen Restaurant has disabled facilities</p>
          <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
       </div>

        <div class="col-md-4">
          <h2>What our Customers say</h2>
          <p>"The best, and most reliable, Indian restaurant in the town. A modern interior and discrete lighting make a pleasant atmosphere." - www.gourmetbritain.com</p>
          <p>"Everybody’s food was was delicious. I had the vegetable biryani which was fragrant and tasty and my daughter enjoyed the vegetable balti. 
            All the dishes were beautifully presented and the waiters were attentive, but never pushy. They do take-aways too!" - www.qype.co.uk </p>
          <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
        </div>

      </div>

<?php
include './includes/footer.php';
?>

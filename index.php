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
            <p class="jumbo1">Contemporary Indian cuisine</p>
            <p class="jumbo2">Freshly prepared in the heart of West Cornwall</p>
            <a class="btn btn-default" href="contact.php" role="button">Book Now &raquo;</a>
          </div>
          <div class="col-sm-4">
            <img id="jumboImage" src="images/home_food.jpg" alt="Contemporary Indian Food">
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-xs-6 col-md-4">
          <h2>Freshly Prepared</h2>
          <p>All of our food is freshly prepared when ordered using only the finest ingredients and fragrant spices.</p>
          <p>Our team of chefs have a lifetime of experience in cooking quality food, ensureing every dish is as tasty as it can be.</p>
        </div>

        <div class="col-xs-6 col-md-4">
          <h2>Authentic flavors</h2>
          <p>Our menu includes all the dishes you have come to expect from your favourite Indian restaurant.</p>
          <p>If you're feeling a little adventurous, why not try one of our chef's specials, many of which are unique to our restaurant.</p>
       </div>

        <div class="col-md-4 review">
          <h2>Knowledgeable Staff</h2>
          <p>Our experienced front of house team are on hand to make your visit as enjoyale as possible.</p>
          <p>We can recommend a dish perfect for your taste, aswell as the ideal accompaning drink for your meal.</p>
        </div>

      </div>

<?php
include 'includes/footer.php';
?>

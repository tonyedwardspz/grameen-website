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
            <a class="fancybox" rel="group" href="images/localarea/hayle_estury_large.jpg" title="Hayle Estuary by John Bennett" >
              <img src="images/localarea/hayle_estury_small.jpg" class="pull-right" alt="Hayle Estuary">
            </a>
            <h2>Hayle Estury</h2>
            <p>Hayel estuary is the most southerly in the UK and is an excellent place to see a wide variety
            of migrant wading birds.</p>
            <p>It's a great place for a walk, with many push chair friendly paths.</p>
          </div>

          <div class="col-xs-12 col-sm-6 attraction-box">
            <h2>Paradise Park</h2>
            <p>Paradise Park, the base of the World Parrot Trust, houses a large collection of rare and exotic birds. The Park is set around a Victorian walled garden, and features tropical plants which thrive in Cornwall’s mild climate.</p>
            <p>The park also has a small children’s play area called the Jungle Barn, and a farm style ‘Petting Zoo’.</p>
            <a class="fancybox" rel="group" href="images/localarea/paradise_park_large.jpg" title="Paradise Park by Tony Edwards" >
              <img src="images/localarea/paradise_park_small.jpg" class="text-center" alt="Paradise Park">
            </a>
          </div>

          <div class="col-xs-12 col-sm-6 attraction-box">
            <h2>The Eden Project</h2>
            <p>Open 7 Days a week including Bank Holidays</p>
            <p>Lunch - 12.00pm to 2.00pm<br>Evening - 5.30pm to 11.30pm</p>
            <p>The Grameen Restaurant has disabled facilities</p>
            <a class="fancybox" rel="group" href="images/localarea/eden_project_large.jpg" title="The Eden Project by Xlibber" >
              <img src="images/localarea/eden_project_small.jpg" class="text-center" alt="Eden Project">
            </a>
          </div>

          <div class="col-xs-12 attraction-box">
            <a class="fancybox" rel="group" href="images/localarea/st_ives_large.jpg" title="St. Ives by Char" >
              <img src="images/localarea/st_ives_small.jpg" class="pull-right" alt="St. Ives Cornwall">
            </a>
            <h2>St. Ives</h2>
            <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
          </div>

          <div class="col-xs-12 col-sm-6 attraction-box">
            <h2>Lands End</h2>
            <p>If you know what you would like and wish to book a table or place an order for takeaway, the restaurant can be contacted directly on 01736 758470.</p>
            <a class="fancybox" rel="group" href="images/localarea/lands_end_large.jpg" title="Lands End by David Jones" >
              <img src="images/localarea/lands_end_small.jpg" class="text-center" alt="Lands End">
            </a>
          </div>

          <div class="col-xs-12 col-sm-6 attraction-box">
            <h2>Geevor Tin Mine</h2>
            <p>Geevor tin mine is </p>
            <p>Lunch - 12.00pm to 2.00pm<br>Evening - 5.30pm to 11.30pm</p>
            <p>The Grameen Restaurant has disabled facilities</p>
            <a class="fancybox" rel="group" href="images/localarea/geevor_tin_mine_large.jpg" title="Geevor Tin Mine by Andrew Bone" >
              <img src="images/localarea/geevor_tin_mine_small.jpg" class="text-center" alt="Geevor Tin Mine">
            </a>
          </div>

       </div>

<?php
include './includes/sidebar.php';
include './includes/footer.php';
?>

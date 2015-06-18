<?php
$metaTag = 'This is an example of a meta description. This will often show up in search results.';
$title = 'Grameen Tandoori';

include 'header.php';
?>

    <div class="container">

      <!-- PAGE TITLE -->
      <div class="blog-header">
        <h1 class="blog-title">Restaurant Page</h1>
      </div>

      <div class="row">
        <div class="col-sm-8 blog-main">

          <!-- PAGE CONTENT -->
          <div class="blog-post">
            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>    
          </div><!-- /.blog-post -->

          <!-- Menu 'thumbs' -->   
          <div class="col-sm-6">
            <a href="images/restaurantmenu/grameen-restaurant-outside-lg.jpg"><img src="images/restaurantmenu/grameen-restaurant-1-lg.jpg" border="0"></a>
          </div>
          <div class="col-sm-6">
            <a href="images/restaurantmenu/grameen-restaurant-inside-lg.jpg"><img src="images/restaurantmenu/grameen-restaurant-2-lg.jpg" border="0"></a>
          </div>
            
          <div class="col-sm-6">
            <a href="images/restaurantmenu/grameen-restaurant-inside-lg.jpg"><img src="images/restaurantmenu/grameen-restaurant-3-lg.jpg" border="0"></a>
          </div>
          <div class="col-sm-6">
            <a href="images/restaurantmenu/grameen-restaurant-outside-lg.jpg"><img src="images/restaurantmenu/grameen-restaurant-4-lg.jpg" border="0"></a>
          </div>
   
        </div><!-- /.blog-main -->

<?php
include 'sidebar.php';
include 'fancy_images.php';
include 'footer.php';
?>

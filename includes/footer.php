
      <footer class="row">
        <hr>
        <!-- MJC create random number and use it to populate fancybox images -->
        <?php
          //get random image number
          $random = rand(1,13);

          for ($x = 0; $x <= 1; $x++){
        ?>
            <!--render fancy box-->
            <div class="col-sm-6 col-md-3 fancyborder">
              <a class="fancybox" rel="group" href="images/photos/<?php echo $random; ?>.jpg">
                <img src="images/photos/<?php echo $random; ?>-tn.jpg" alt="[ Random Image ]" /> <!--filename is 1-tn.jpg, 2-tn.jpg etc -->
              </a>
            </div>

        <?php
            do {
              $random2 = rand(0,9);
            } while ($random == $random2);
            $random = $random2;
          }//end for loop
        ?><!-- end of footer fancy box -->

        <div class="col-sm-6 col-md-3">
          <h3>Pages</h3>
          <ul>
            <li>
              <a href="index.php" title="Grameen Tandoori Home Page">
                Home</a>
            </li>
            <li>
              <a href="restaurant.php" title="Grameen Restaurant Menu">
                Our Restaurant</a>
            </li>
            <li>
              <a href="takeaway.php" title="Grameen Takeaway Menu">
                Takeaways and Delivery</a>
            </li>
            <li>
              <a href="contact.php" title="Order Takeaway and Book Table">
                 Contact us</a>
            </li>
            <li>
              <a href="attractions.php" title="Attractions in West Cornwall">
                Local Attractions</a>
            </li>
          </ul>
        </div>


        <div class="col-sm-6 col-md-3">
          <h3>Contact:</h3>
          <p>Please contact us on:</p>
          <p>
            <a href="" title="Contact me!"><i class="fa fa-phone-square fa-2x"></i>  01736 758470</a>
          </p>

          <a href="https://www.facebook.com/grameen.tandoorihayle" title="Facebook"  target="_blank" title="Facebook">
            <span class="fa-stack fa-lg">
            <i class="fa fa-square-o fa-stack-2x"></i>
             <i class="fa fa-facebook fa-stack-1x"></i>
            </span>
          </a>

          <a href="https://plus.google.com/100199113052646253342/about" title="Google Plus" target="_blank" title="Google Plus">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-google-plus fa-stack-1x"></i>
            </span>
          </a>

          <a href="https://twitter.com/search?src=typd&q=grameen%20hayle&lang=en-gb" target="_blank" title="Twitter">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x"></i>
            </span>
          </a>
        </div>

        <hr>

        <div class="col-sm-12 col-md-6">
          <p>&copy; <?php echo date('Y'); ?> Grameen Tandoori | <a href="http://purelywebdesign.co.uk/">Purely Web Design</a> | <a href="privacy.php">Privacy Policy</a></p>
        </div>

        <div class="col-sm-12 col-md-6 alignright">
          <p>All major cards accepted. <img src="images/credit_card_accepted.jpg"></p>
        </div>

      </footer>

    </div> <!-- /container -->

    <!-- Scripts -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/script.js"></script>
    <!-- TripAdvisor-->
    <script src="http://www.jscache.com/wejs?wtype=restaurantWidgetGreen&amp;uniq=764&amp;locationId=1996321&amp;icon=knifeAndFork&amp;lang=en_UK&amp;display_version=2"></script>

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Restaurant",
      "name": "Grameen Tandoori",
      "description": "Contemporary Indian Restaurant and takeaway in the heart of Hayle, Cornwall",
      "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 12:00-14:00 and 17:30-23:00",
      "telephone": "+441736758470",
      "menu": "http://www.grameentandoori.co.uk/restaurant.php",
      "acceptsReservations": "YES",
      "servesCuisine": "Indian"
    }
    </script>

  </body>
</html>

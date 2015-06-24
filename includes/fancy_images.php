
      <!-- FANCYBOX Images -->
      <div class="fancymargin">
        <div class="row fancy-container" >
          <!-- MJC create random number and use it to populate fancybox images -->
          <?php 
          for ($x = 0; $x <= 3; $x++) {
            $random = rand(1,13);      
          ?>
            <div class="col-sm-6 col-md-3 fancyborder">
              <a class="fancybox" rel="group" href="images/photos/<?php echo $random; ?>.jpg">
                <img src="images/photos/<?php echo $random; ?>-tn.jpg" alt="[ Random Image ]" /> <!--filename is 1-tn.jpg, 2-tn.jpg etc -->
              </a>
            </div>
          <?php
          } 
          ?><!-- end of footer fancy box -->
      </div>
     </div> <!-- Row -->

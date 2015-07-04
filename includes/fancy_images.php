
          <?php
            $imgArr = array(); //hold image number
            $iCnt=0;
            // main outer loop
            for ($x = 0; $x <= 1; $x++) {
              // get random num if not in array, add to array and then to fancybox
              while (1){
                $random = rand(1,13);
                if (! in_array($random, $imgArr)) {
                  $imgArr[$x] = $random;
                  $iCnt++;
          ?>
                  <!--render fancybox -->
                  <div class="col-sm-6 fancyborder">
                    <a class="fancybox" rel="group" href="images/photos/<?php echo $random; ?>.jpg">
                      <img src="images/photos/<?php echo $random; ?>-tn.jpg" alt="Grameen Tandoori" /> <!--filename is 1-tn.jpg, 2-tn.jpg etc -->
                    </a>
                  </div>
          <?php
                  break;  //now we've added the image break out to main outer loop
                }//endif
              }//end of while
            }//end of outer loop
          ?>

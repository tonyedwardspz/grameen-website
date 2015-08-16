<div class="fancy-image-wrapper">
<?php
  $imgArr = array();

  for ($x = 0; $x <= 1; $x++) {

    while (1){
      $random = rand(1,13);
      if (! in_array($random, $imgArr)) {
        $imgArr[$x] = $random;
?>

<div class="col-xs-6 col-md-3">
  <a class="fancybox" href="images/photos/<?php echo $random; ?>.jpg">
    <img src="images/photos/<?php echo $random; ?>-tn.jpg" alt="Grameen Tandoori" />
  </a>
</div>

<?php break;
      }
    }
  }
?>
</div>

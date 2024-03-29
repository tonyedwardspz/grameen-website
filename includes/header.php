<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include 'opengraph.php'; ?>

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="<?php echo $pageName; ?>">      
    <!-- Fixed Header -->
    <nav class="navbar navbar-back navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="http://www.grameentandoori.co.uk" title="Grameen Tandoori Hayle">Grameen Tandoori Restaurant</a>  
        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li class="home">
              <a href="index.php" title="Grameen Tandoori - Home Page">Home</a>  
            </li>
            <li class="restaurant">
              <a href="restaurant.php" title="Grameen Restaurant Menu">Restaurant</a>
            </li>
            <li class="takeaway">
              <a href="takeaway.php" title="Grameen Takeaway Menu">Takeaway</a>  
            </li>
            <li class="attractions">
              <a href="attractions.php" title="Attractions in West Cornwall">Attractions</a>
            </li>
            <li class="contact">
              <a href="contact.php" title="Order Takeaway and Book Table">Booking</a>
            </li>     
          </ul>   
        </div>
      </div>
    </nav>

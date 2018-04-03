 <!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/layout.css">
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>MAINSHOP</title>
    </head>

    <body>
      <div class="navbar">
        <?php
          include "layout/navbar.php";
        ?>
      </div>

      <div class="slide" style="padding-top: 20px;">
        <?php
          include "layout/carousel.php";
        ?>
      </div>

      <div style="width: 70%; margin:0 auto;padding-top: 20px;">
        <?php
          include "layout/main.php";
        ?>
      </div>
  
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/nav.js"></script>
    </body>
  </html>
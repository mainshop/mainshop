<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MAINSHOP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- NAVBAR -->
  <div class="sticky-top">
    <?php
      include "layout/navbar.php";
    ?>
  </div>
  <!-- CAROUSEL -->
  <div style="padding-top: 10px;">
    <?php
      include "layout/carousel.php";
    ?>
  </div>
  <!--LIST BARANG / KATEGORI POPULER -->
  <div style="padding-top: 50px;padding-bottom: 100px;">
    <?php
      include "layout/kategori-populer.php";
    ?>
  </div>
  <!-- KONTEN UTAMA -->
  <div>
      <?php 
        include "layout/content-mouse.php";
      ?>
  </div>
  <!-- FOOTER -->  
  <div>
      <?php 
        include "layout/footer.php";
      ?>
  </div>
</body>
</html>
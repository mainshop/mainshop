<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/logokotak.png" type="image/x-icon">
  <title>MAINSHOP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .pesan{
      text-align:center;
      margin: 215px 0px;
    }
    .tombol{
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    }

    .kembaliBelanja {background-color: #2196F3;} /* Blue */
    .kembaliBelanja:hover {background: #0b7dda;}
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <div class="sticky-top" style="box-shadow: 1px 1px 5px;">
    <?php
      include "layout/navbar.php";
    ?>
  </div>
  <!-- PESAN -->
  <div class="pesan">
    <form action="index.php">
      <p style="font-size:50px;">Pesanan anda sedang dalam proses pengiriman</p>
      <p style="font-size:30px;">Terima kasih anda telah berbelanjan di MAINSHOP</p>
      <button class="tombol kembaliBelanja">Lanjut Belanja</button>
    </form>
  </div>

  <!-- FOOTER -->  
  <div style="margin-top: 5%;">
      <?php 
        include "layout/footer.php";
      ?>
  </div>
</body>
</html>
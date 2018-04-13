<!DOCTYPE html>
<html>
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
<body style="text-align: center; background-image: url('../img/bgreg.jpg');">
  <div class="container center" style="width: 100%; height: auto; margin-top: 2%">
    <form class="bg-dark text-light" style="margin: 0 auto; border-radius: 2%; width: 700px; height: 700px;">
      <div style="height: 10%; padding: 50px 20px; font-family: Cordia New;">      
        <h2>DAFTAR</h2>
      </div>

      <div style="height: 50%; margin: 0 auto; padding-left: 40px; padding-right: 40px;">
          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Nama :</p>
            <input style="float: left; width: 100%;" type="text" name="name" required="" placeholder="Nama Lengkap">        
          </div>

          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">No.HP :</p>
            <input style="float: left; width: 100%;" type="tel" name="telp" required="" placeholder="088088888888">        
          </div>

          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Alamat :</p>       
            <textarea style="float: left; width: 100%;" required placeholder="Alamat Lengkap"></textarea>
          </div>

          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Email :</p>
            <input style="float: left; width: 100%;" type="email" name="email" required="" placeholder="Email">        
          </div>

          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Password :</p>        
            <input style="float: left; width: 100%;" type="password" name="password" required="" placeholder="Password">
          </div>

          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Ulangi Password :</p>        
            <input style="float: left; width: 100%;" type="password" name="password2" required="" placeholder="Ulangi Password">
          </div>
      </div>

      <div style="height: 10%; padding-top: 40px; margin-top: 10px;">
        <div style="padding: 1px 20px;">
          <a href="../index.php" type="submit" name="back" class="btn btn-success">Kembali</a>
          <button type="submit" name="login" class="btn btn-primary">Daftar</button>
        </div>
        
        <div style="padding-bottom: 10px; padding-top: 30px; text-align: center;">
          Belum Punya Akun? <a href="login.php">Masuk</a>
        </div>
      </div>      
    </form>
  </div>
</body>
</html>
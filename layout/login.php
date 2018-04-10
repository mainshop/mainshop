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
<body style="text-align: center;">
  <div class="container center" style="width: 30%; height: auto; margin-top: 10%">
    <form class="bg-dark text-light" style="margin: 0 auto; border:1; border-radius: 2%; width: 400px; height: 500px;">
      <div style="height: 30%; padding: 50px 20px; font-family: Cordia New;">      
        <h2>MASUK</h2>
      </div>

      <div style="height: 35%; margin: 0 auto; ">
          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Email :</p>
            <input style="float: left; width: 100%;" type="email" name="emai" required="" placeholder="Email">        
          </div>

          <div style="padding: 15px 10px;">
            <p style="text-align: left; margin-bottom: 1px;">Password :</p>        
            <input style="float: left; width: 100%;" type="password" name="password" required="" placeholder="Password">
          </div>
      </div>

      <div style="height: 35%;">
        <div style="padding: 1px 20px; margin-bottom: 10px;">
          <a href="../index.php"><button type="submit" name="back" class="btn btn-success">Kembali</button></a>
          <button type="submit" name="login" class="btn btn-primary">Masuk</button>
        </div>
        
        <div style="padding-bottom: 10px; padding-top: 30px; text-align: center;">
          Belum Punya Akun? <a href="register.php">Daftar</a>
        </div>
      </div>      
    </form>
  </div>
</body>
</html>
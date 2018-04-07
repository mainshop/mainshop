<!DOCTYPE html>
<html>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    color: white;
}
* {box-sizing: border-box}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity:1;
}

/* Add a blue text color to links */
a {
    color: #602474ff;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background: #5fd3bcff;
    text-align: center;
}
</style>
<body style="background: #d9d4ceff;">

<form style="border:1px solid #ccc; width: 30%;margin: 50px; margin-left: 35%; margin-right: 35%; background: #5fd3bcff;">
  <div class="container">
    <h1 style="text-align: center;">Daftar</h1>
    <p>Silahkan isi formulir dibawah ini untuk membuat akun.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Masukkan Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" name="psw" required>

    <label for="psw-repeat"><b>Ulangi Password</b></label>
    <input type="password" placeholder="Ulangi Password" name="psw-repeat" required>
    <hr>
    <p>Menyetujui Semua persyaratan kami untuk membuat akun <a href="#">Syarat & Ketentuan</a>.</p>

    <button type="submit" class="registerbtn">Daftar</button>
    <button type="submit" class="registerbtn">Kembali</button>
  </div>
  
  <div class="container signin">
    <p>Sudah Punya Akun? <a href="#">Masuk</a>.</p>
  </div>
</form>

</body>
</html>

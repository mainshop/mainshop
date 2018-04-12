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
    
    <script type="text/javascript">

        $(document).ready(function(){
        function hitung() {
          var harga = $("#harga").val();
          var jumlah = $("#jumlah").val();
          if(harga>0 && jumlah>0){
            var total = parseInt(harga)*parseInt(jumlah);
            $("#total").val(total);
           
          }else{
            $("#total").val('');
          }
        }
        $("#harga").keyup(function(){
          hitung();
        });
        $("#jumlah").keyup(function(){
          hitung();
        });
        });

        </script>

        <script>// ajax text
        function showHint(str) {
            if (str.length == 0) { 
                document.getElementById("txtHint").innerHTML = "";
                return;

            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
        </script>    
    
  <body>
    <div class="sticky-top">
      <?php
        include "layout/navbar.php";
      ?>
    </div>

    <div class="container">
      <section class="bg-primary">
        <div class="row">
          <div class="col-md-12 ">
            <h2 class="text-center text-light">Traksanksi</h2>
          </div>
        </div>
      </section>      
      <br>
      <br>
      <section class="bg-light">
        <div class="row  pt-4">           
          <div class= "col-md-4 offset-2 ">
            <h6>Jumlah barang  </h6>
            <div class="input-group mb-3">
              <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Banyak barang " aria-label="jumlah" aria-describedby=" basic-addon1">
              <div class="input-group-append" style="padding-top: 8px;">  
                <span class="input-group-text">.pcs</span>  
              </div>  
            </div>  
        
            <h6>Harga</h6>  
               
            <div class="input-group mb-3">  
              <div class="input-group-prepend" style="padding-top: 8px;"> 
                <span class="input-group-text"> Rp. </span>  
              </div>  
              <input name="harga" id="harga" type="text" class="form-control" placeholder="harga sementara ketik manual" aria-label="harga" aria-describedby="basic-addon1">      
            </div>  
            
            <h6>Total   Harga </h6> 
              <div class="input-group mb-3">  
                <div class="input-group-prepend" style="padding-top: 8px;"> 
                  <span class="input-group-text">Rp. </span>  
                </div>  
                <input name="total" id="total" type="text" class="form-control" placeholder="Total harga barang" readonly="readonly" aria-label="harga"   aria-describedby="basic-addon1" >     
              </div>
          </div>  
            
          <div class = "col-md-4 p-2" style="margin: 0 auto;padding-top: 20px;margin-top: 28px;margin-left: 153px;">  
            <image src="img/hp.jpeg" class="rounded img-thumbnail" width="250px" height="300px"></image> 
          </div>        
          
          </div> 
      </section >  
      <br><br>  
        
      <section class ="bg-light">
        <div class="row pt-5">
          <div class="col-md-8 offset-2">
            <h6>Nama </h6>
            <div class="input-group mb-3">
             <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
            </div>
              
            <h6>Email </h6>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="xx@email.com" aria-label="Username" aria-describedby="basic-addon1">
            </div>
              
            <h6>Provinsi</h6>
            <div class="input-group mb-3">
              <select class="custom-select" id="input1">
                <option selected>Choose ...</option>
                <option value="1">Jawa Tengah</option>
                <option value="2">Jawa Timur</option>               
                <option value="3">Jawa Barat</option>
              </select>
            </div>          
            
            <h6>Kota</h6>
            <div class="input-group mb-3">
              <select class="custom-select" id="input2">
                <option selected>Choose...</option>
                <option value="1">Banjarnegara</option>
                <option value="2">Purwokerto</option>               
                <option value="3">Purworejo</option>
                <option value="4">Pekalongan</option>
                <option value="5">Magelang</option>
                <option value="6">Kebumen</option>
                <option value="7">Wonosobo</option>
                <option value="8">Semarang</option>
                <option value="9">Demak</option>
                <option value="10">Kudus</option>
                <option value="11">Temanggung</option>
              </select>
             </div>
            
              
            <h6>No Hp </h6>
            <div class="input-group mb-3">
              <div class="input-group-prepend" style="padding-top: 8px;">
                <span class="input-group-text">+62</span>
              </div>
              <input type="text" class="form-control" placeholder="Nomor Hp" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <h6>Alamat lengkap</h6>
            <div class="input-group mb-3">
              <textarea rows=5 cols="80" name="alamat" class="bg-white"></textarea>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4 p-4 offset-3">
            <input class="btn btn-primary" type="submit" value="Kirim">
            <input class="btn btn-dark" type="reset" value="Reset">        
          </div>
        </div>
      </section>
    </div>

    <div>
      <?php 
        include "layout/footer.php";
      ?>
    </div>
    
    <script src="/script.js" defer></script>
  
  </body>
 </head>
</html>

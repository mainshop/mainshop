<!DOCTYPE html>
<html>
  <head>
    <title>Hello!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="/styles.css">
      <!--     Jquery -->
       <script src="jquery.js" type="text/javascript"></script>
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
    
    <body>  <br>
    <div class="container">
      <section class="bg-primary">
          <div class="row">
            <div class="col-md-12 ">
              <h2 class="text-center text-white">
                  Traksansi Payment Mainshop
              </h2>
            </div>
         </div>
    </section>      
<br>
<br>
      <section class="bg-info">
      <div class="row  pt-4">           
        <div class= "col-md-4 offset-2 ">
          <h6>Jumlah barang  </h6>
                <div class="input-group mb-3">
                <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Banyak barang " aria-label="jumlah" aria-describedby="basic-addon1">    
                    <div class="input-group-append">
                  <span class="input-group-text">.pcs</span>
                  </div>
          </div>
     
          <h6>Harga  </h6>
          
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                  </div>
                <input name="harga" id="harga" type="text" class="form-control" placeholder="harga sementara ketik manual" aria-label="harga" aria-describedby="basic-addon1">    
          </div>
      <h6>Total Harga </h6>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp. </span>
                  </div>
                <input name="total" id="total" type="text" class="form-control" placeholder="Total harga barang" readonly="readonly" aria-label="harga" aria-describedby="basic-addon1" >    
          </div>          
        </div>
        
              <div class = "col-md-4 p-2">
            <image src="https://cdn.glitch.com/aae48c9b-1920-4917-89ab-c83bbcb84460%2Fhp2.jpeg?1523423773456" class="rounded img-thumbnail" width="250px" height="300px"></image>
          </div>      
         </div>
      </section>
        <br><br>
      <section class ="bg-info">
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
        <h6>Privinsi</h6>
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
              <div class="input-group-prepend">
                <span class="input-group-text">+62</span>
              </div>
                        <input type="text" class="form-control" placeholder="Nomor Hp" aria-label="Username" aria-describedby="basic-addon1">
                </div>
          <h6>
            Alamat lengkap
          </h6>
          <div class="input-grub mb-3">
            <textarea rows=5 cols="80" name="alamat">
            </textarea>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 p-4 offset-3">
            <input class="btn btn-primary" type="submit" value="Submit">
          <input class="btn btn-primary" type="reset" value="Reset">
            
          </div>
        </div>
      </section>
    </div>
    <script src="/script.js" defer></script>
  
  </body>
 </head>
</html>

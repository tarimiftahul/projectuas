<?php
  @session_start();
  include "../inc/koneksi.php";
  $id=0;
  if(isset($_GET['id'])) $id=$_GET['id'];
    if(isset($_POST["konfirmasi"])){
      $ekstensi_diperbolehkan = array('png','jpg');
      $nama = $_FILES['file']['name'];
      $x = explode('.', $nama);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $id_donasi=$_POST['id_donasi'];
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 1044070){      
            move_uploaded_file($file_tmp, '../images/'.$nama);
            $query=mysql_query("insert into tb_konfirmasi values('','$_POST[jumlah]','$nama','$id_donasi')") or die(mysql_error());

            $query2=mysql_query("update tb_donasi set status='success' where id_donasi='".$id_donasi."'") or die(mysql_error());
      
              if($query){
                ?> <script type="text/javascript">alert("Konfirmasi anda akan di proses");</script> <?php
                $update=mysql_query($query2);
              }else{
                echo 'GAGAL';
              }

              }else{
                echo 'UKURAN FILE TERLALU BESAR';
              }

              }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
              }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>KitaMampu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
      }
      footer {
        background-color: #8FBC8F;
        color: #B0C4DE;
        padding: 10px;
      }
      footer a {
        color: #800000;
      }
      footer a:hover {
        color: #777;
        text-decoration: none;
      }  
    </style>
</head>
    <div class="container">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">KitaMampu</a>
          </div>
            <ul class="nav navbar-nav">
              <li><a href="index.php">H O M E</a></li>
              <li><a href="galang.php">GALANG DANA</a></li>
              <li><a href="donasi.php">DONASI</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['uname']; ?><span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="tampildonasiuser.php">Donasi Saya</a></li>
            <li><a href="tampilgalanguser.php">Galang Dana Saya</a></li>
            <li><a href="edituser.php">Edit Profil</a></li>
          </ul>
          </li>
            <li class="utama"><a href="../inc/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </nav>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <div class="page-header"><h3 align="center">Silahkan Isi Konfirmasi Pembayaran</h3>
    </div>

      <div id="inputan">
        <form enctype="multipart/form-data" action="konfirmasi.php" method="post">
          <input type="hidden" name="id_donasi" value="<?php echo $id; ?>">
            <div class="form-group">
              <label for="jumlah" class="control-label col-sm-3">Nominal Donasi</label>
              <div class="col-sm-8">
              <input type="text" name="jumlah" placeholder="Masukkan Nominal Donasi" class="form-control" style="width: 750px; margin: 10px;" />
              </div>
            </div>
            <div class="form-group">
              <label for="foto" class="control-label col-sm-3">Foto</label>
              <div class="col-sm-8">
              <input name="file" type="file" class="form-control" style="width: 750px;margin: 10px;" required/>
              </div>
              </div>
            <div class="form-group">
              <label for="btn" class="control-label col-sm-3"></label>
              <div class="col-sm-8">
              <div class="col-sm-4">
              <input type="submit" name="konfirmasi" value="Konfirmasi Sekarang" class="btn btn-info btn-block"/>
              </div>
              <div class="col-sm-4">
              <input type="reset" id="reset" class="btn btn-danger btn-block" value="Batal" />
              </div>
              </div>
            </div>
        </form>
      </div>
    </div>
      <br>
      <br>
      <div id="contact" class="container">
        <h3 class="text-center">Contact</h3>

          <div class="row">
            <div class="col-md-4">
             
              <p><span class="glyphicon glyphicon-map-marker"></span>Bandung, INA</p>
              <p><span class="glyphicon glyphicon-phone"></span>Phone: 021 912 315</p>
              <p><span class="glyphicon glyphicon-envelope"></span>Email: kitamampu@gmail.com</p>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
              <br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <button class="btn btn-info" type="submit">Send</button>
                </div>
              </div>
              </div>
            </div>
      </div>
  <!-- Footer -->
  <footer class="text-center">
    <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">Copyright &copy 2017</a></p> 
  </footer>
      
      </body>
      </html>
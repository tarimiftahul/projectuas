<?php
@session_start();
include "inc/koneksi.php";

if(isset($_POST["register"])){
  $query=mysql_query("insert into tb_user values('','$_POST[username]','md5($_POST[password])','$_POST[nama_lengkap]','$_POST[jenis_kelamin]','$_POST[no_telepon]','$_POST[email]','$_POST[alamat]')") or die(mysql_error());
  if($query){
    ?> <script type="text/javascript">alert("Selamat datang orang baik, Silahkan Login");</script> <?php
    //header("location: login.php");
  }else{
    echo "gagal";
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
      margin-bottom: 20px;
      margin-top: 20px;
      background-color: #8FBC8F;
      color: #B0C4DE;
      padding: 10px;
       border-top-right-radius: 10px;
  border-top-left-radius: 10px;
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
<body>
    <div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">KitaMampu</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">H O M E</a></li>
      <li><a href="user/galang.php">GALANG DANA</a></li>
      <li><a href="user/donasi.php">DONASI</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Registrasi</title>

</head>
  <body>

<div class="page-header"><h3 align="center">Register</h3>
      </div>

    <div id="inputan">
      <form action="daftar.php" method="post">
        <div class="form-group">
        <label for="username" class="control-label col-sm-3">Username</label>
        <div class="col-sm-8">
          <input type="text" name="username" placeholder="username" class="form-control" style="width: 750px; margin:10px;" />
        </div>
        </div>
        <div class="form-group">
        <label for="password" class="control-label col-sm-3">Password</label>
        <div class="col-sm-8">
          <input type="password" name="password" placeholder="Password" class="form-control" style="width: 750px; margin:10px;"/>
        </div>
        </div>
        <div class="form-group">
        <label for="username" class="control-label col-sm-3">Nama Lengkap</label>
        <div class="col-sm-8">
          <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" style="width: 750px; margin:10px;"/>
        </div>
        </div>
        <div class="form-group">
        <label for="jenis_kelamin" class="control-label col-sm-3">Jenis Kelamin</label>
        <div class="col-sm-8">
          <select class="form-control" name="jenis_kelamin" style="width: 750px; margin:10px;">
            <option value="">-Pilih Jenis Kelamin-</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        </div>
        <div class="form-group">
        <label for="no_telepon" class="control-label col-sm-3">Nomor Telepon</label>
        <div class="col-sm-8">
        <input type="text" name="no_telepon" placeholder="No Telepon" class="form-control" style="width: 750px; margin:10px;"/>
        </div>
        </div>
        <div class="form-group">
        <label for="email" class="control-label col-sm-3">Email</label>
        <div class="col-sm-8">
        <input type="text" name="email" placeholder="Email" class="form-control" style="width: 750px; margin:10px;"/>
        </div>
        </div>
        <div class="form-group">
        <label for="alamat" class="control-label col-sm-3">Alamat</label>
        <div class="col-sm-8">
          <textarea name="alamat" class="form-control" placeholder="Alamat" style="width: 750px; margin:10px;"></textarea>
        </div>
        </div>
        <div class="form-group">
      <label for="btn" class="control-label col-sm-3"></label>
      <div class="col-sm-8">
        <div class="col-sm-4">
          <input type="submit" name="register" value="Register" class="btn btn-info btn-block"/>
          </div>
          <div class="col-sm-4">
        <input type="reset" id="reset" class="btn btn-danger btn-block" value="Batal" />
        </div>
          </div>
          </div>
      </form>
      </div>
      </div>
      <footer class="text-center">
  
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">Copyright &copy 2017</a></p> 
</footer>
      </body>
      </div>
      </body>
      </html>
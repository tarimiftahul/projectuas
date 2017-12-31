<?php
session_start();
include "../inc/koneksi.php";

$id= $_SESSION['id'];
  $sql = mysql_query("select * from tb_user where id_user = '$id' ") or die (mysql_error());
  $data = mysql_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	  <title>dashboard user</title>
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
<body>
  	<div class="container">
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">KitaMampu</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">H O M E</a></li>
      <li class="active"><a href="galang.php">GALANG DANA</a></li>
      <li><a href="#">ABOUT</a></li>
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
<title>Edit Profil</title>
</head>
  <body>

  <div class="page-header"><h3 align="center">Edit Profil</h3>
      </div>

    <div id="inputan">
      <form action="" method="post">
      
        <div class="form-group">
        <label for="username" class="control-label col-sm-3">Username</label>
         <div class="col-sm-8">
          <input type="text" name="username"  class="form-control" style="width: 750px; margin: 10px;" value="<?php echo $data['username']; ?>" />
        </div>
        </div>
         <div class="form-group">
        <label for="password" class="control-label col-sm-3">Password</label>
         <div class="col-sm-8">
          <input type="password" name="password" class="form-control" style="width: 750px; margin: 10px;" value="<?php echo $data['password']; ?>"/>
        </div>
        </div>
        <div class="form-group">
        <label for="nama_lengkap" class="control-label col-sm-3">Nama Lengkap</label>
         <div class="col-sm-8">
          <input type="text" name="nama_lengkap" class="form-control" style="width: 750px; margin: 10px;" value="<?php echo $data['nama_lengkap']; ?>"/>
        </div>
        </div>
        <div class="form-group">
        <label for="jenis_kelamin" class="control-label col-sm-3">Jenis Kelamin</label>
         <div class="col-sm-8">
          <select class="form-control" style="width: 750px; margin: 10px;" name="jenis_kelamin">
            <option value="">-Pilih Jenis Kelamin-</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        </div>
        <div class="form-group">
        <label for="no_telepon" class="control-label col-sm-3">No Telepon</label>
         <div class="col-sm-8">
        <input type="text" name="no_telepon"  class="form-control" style="width: 750px; margin: 10px;" value="<?php echo $data['no_telepon']; ?>"/>
        </div>
        </div>
        <div class="form-group">
        <label for="email" class="control-label col-sm-3">Email</label>
         <div class="col-sm-8">
        <input type="text" name="email"  class="form-control" style="width: 750px; margin: 10px;" value="<?php echo $data['email']; ?>"/>
        </div>
        </div>

        <div class="form-group">
        <label for="alamat" class="control-label col-sm-3">Alamat</label>
         <div class="col-sm-8">
          <input name="alamat" class="form-control" style="width: 750px; margin: 10px;"  value="<?php echo $data['alamat']; ?>">
        </div>
        </div>
        <div class="form-group">
      <label for="btn" class="control-label col-sm-3"></label>
      <div class="col-sm-8">
        <div class="col-sm-4">
          <input type="submit" name="edit"  value="Edit" class="btn btn-info btn-block"/>
          </div>
          <div class="col-sm-4">
          <input type="reset" name="batal" value="Batal" class="btn btn-danger btn-block"/>
        </div>
        </div>
        </div>
      </form>
      </div>
      </div>
      <?php
         $id_user = @$_POST['id_user'];
         $username = @$_POST['username'];
         $password = @$_POST['password'];
         $nama_lengkap = @$_POST['nama_lengkap'];
         $jenis_kelamin = @$_POST['jenis_kelamin'];
         $no_telepon = @$_POST['no_telepon'];
         $email = @$_POST['email'];
         $alamat = @$_POST['alamat'];
        
         $edit_profil = @$_POST['edit'];
         if($edit_profil){
           if($username == ""|| $password == ""|| $nama_lengkap == "" || $jenis_kelamin == "" || $no_telepon == "" || $email == "" || $alamat == ""){ 
             ?>
                   <script type="text/javascript">
             alert("Inputan tidak boleh ada yang kosong");
             </script>
                   <?php
           } else {
             mysql_query("update tb_user set username = '$username', password = '$password', nama_lengkap = '$nama_lengkap', jenis_kelamin = '$jenis_kelamin', no_telepon = '$no_telepon', email = '$email', alamat = '$alamat' where id_user = '$id'") or die (mysql_error());
             ?>
                   <script type="text/javascript">
             alert("Data Berhasil Diedit");
             window.location.href="?page=edit";
             </script>
                   <?php
           }
         }
   ?>
<br>

      <div id="contact" class="container">
  <h3 class="text-center">Contact</h3>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
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
      <footer class="text-center">
  
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">Copyright &copy Tari Miftahul Jannah</a></p> 
</footer>
      </body>
      </div>
      </body>
      </html>
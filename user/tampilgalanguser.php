<?php
session_start();
include "../inc/koneksi.php";

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
      <a class="navbar-brand" href="index.php">KitaMampu</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">H O M E</a></li>
      <li class="active"><a href="galang.php">GALANG DANA</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['uname']; ?><span class="caret"></span></a>
      <ul class="dropdown-menu">
         <li><a href="tampildonasiuser.php">Donasi Saya</a></li>
         <li><a href="tampilgalanguser.php">Galang Dana Saya</a></li>
          <li><a href="profil.php">Profil</a></li>
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

<fieldset>
	<legend><strong>Tampil Data Galang Dana</strong></legend>
	
    <div class="row" >
    <div class="col-md-12 col-xs-12">
      <table class="table table-bordered table-striped table-hover" >
      <thead style="background-color: #66CCFF;"> 
    	
            <th style="text-align: center;">Judul</th>
            <th style="text-align: center;">Kategori</th>
            <th style="text-align: center;">Lokasi</th>
            <th style="text-align: center;">Target</th>
            <th style="text-align: center;">Deadline</th>
            <th style="text-align: center;">Opsi</th>
        
      </thead>
        <?php 
        $sql = mysql_query("select * from tb_galang where id_user = '$_SESSION[id]'") or die (mysql_error());
        while ($data = mysql_fetch_array($sql)){
        	?>
			<tr>
				<td align="center"><?php echo $data['judul']; ?></td>
				<td align="center"><?php echo $data['kategori']; ?></td>
				<td align="center"><?php echo $data['lokasi']; ?></td>
				<td align="center"><?php echo $data['target']; ?></td>
				<td align="center"><?php echo $data['deadline']; ?></td>

          <td align="center">
              <a href="editgalanguser.php?id_galang=<?php echo $data['id_galang']; ?>"  class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
          </td>


			</tr>
			<?php
			}
		?>
    </table>
    </div>
    </div>
</fieldset>

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
  
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">Copyright &copy 2017</a></p> 
</footer>
      </body>
      </div>
      </body>
      </html>
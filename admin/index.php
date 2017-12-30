<?php
session_start();
include "../inc/koneksi.php";
if(!isset($_SESSION['user'])){
  header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	  <title>tugas4</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/boot strap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
    footer {
      background-color: #FFB6C1;
      color: #B0C4DE;
      padding: 32px;
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
      <a class="navbar-brand" href="#">Kita Mampu</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">U S E R</a></li>
      <li><a href="galang.php">GALANG DANA</a></li>
      <li><a href="#">DONASI</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['uname']; ?></a></li>
      <li class="utama"><a href="../inc/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
		 <div class="carousel-inner" role="listbox">
    		<div class="item active">
      		<img src="images/1.jpg" alt="New York">
      			<div class="carousel-caption">
        
      			</div> 
    		</div>

    	<div class="item">
      	<img src="images/coba1.jpg" alt="Chicago">
      	<div class="carousel-caption">
      
      </div> 
    </div>

    <div class="item">
      <img src="images/coba2.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        
      </div> 
    </div>
  </div>
</div>
          
    <h1>5 Famous Character on Wattpad</h1>    
    <table class="table table-bordered">
    	<thead>
      		<tr>
		        <th><mark>Name</mark></th>
		        <th><mark>Email</mark></th>
            <th><mark>Novel</mark></th>
		    </tr>
		    <tr>
		        <th>Ransi Akbar</th>
		        <th>ransi@gmail.com</th>
            <th>Evermore</th>
		    </tr>	
		    <tr>
		        <th>Nadhira Azmi</th>
		        <th>nadi@gmail.com</th>
            <th>Dunia Nadhira</th>
		    </tr>
		    <tr>
		        <th>Ganisya Aradya</th>
		        <th>icaiskandar@gmail.com</th>
            <th>Jejak</th>
		    </tr>
		    <tr>
		        <th>Satrya Danang</th>
		        <th>satsat@gmail.com</th>
            <th>Satu Ruang</th>
		    </tr>
		    <tr>
		        <th>Favian Hachman</th>
		        <th>ianhachm@gmail.com</th>
            <th>Breadcrumb</th>
		    </tr>
		</thead>
	</table>
	<button type="button" class="btn btn-info">Add Data</button>
	<button type="button" class="btn btn-info">Delete Data</button>
	<hr>
	<img class="img-responsive" src="images/coba2.jpg" alt="one" width="1200" height="400">
	<div class="alert alert-danger">
    	<strong>Info!</strong> For more info click here <a href="#" class="alert-link">www.Wattpadawards.com</a>.
  	</div>
  

<!-- Container (Contact Section) -->
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
  <!-- Footer -->
<footer class="text-center">
  
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">Copyright &copy 2017</a></p> 
</footer>
</div>
</body>
</html>
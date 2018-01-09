   <!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <link href="css/album.css" rel="stylesheet">
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
  #sidebar {
  width:25%;
  float:left;
  margin-right:10px;
}

#sidebar-left {
  width:280px;
  float:left;
}

.sidebar {
  margin:0px 8px 0px 12px;
}

#sidebar .sidebar h2,  #sidebar-left .sidebar h2{
  padding:11px;
  margin-top:0px;
  -moz-box-shadow:inset 0px 1px 0px 0px  #778899;
  -webkit-box-shadow:inset 0px 1px 0px 0px  #778899;
  box-shadow:inset 0px 1px 0px 0px  #778899;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #778899), color-stop(1, #778899) );
  background:-moz-linear-gradient( center top, #778899 5%, #778899 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#778899', endColorstr='#778899');
  background-color:#778899;
  font-size:15px;
  color:#fff;
  border-radius: 16px 0px 16px 0px;
}


#sidebar .sidebar ul {
  margin-left:-26px;
}

#sidebar .sidebar li {
  list-style-type:none;
  border-bottom:1px dashed #cecece;
}

#sidebar .sidebar a {
  text-decoration:none;
}

#sidebar .sidebar a:hover {
  color:red;
}

#sidebar .sidebar li:hover {
  background:#e3e3e3;
}
    </style>
</head>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
     <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../images/ban2.jpg" alt="New York">
            <div class="carousel-caption">
        
            </div> 
        </div>

      <div class="item">
        <img src="../images/ban1.jpg" alt="Chicago">
        <div class="carousel-caption">
      
      </div> 
    </div>

    <div class="item">
      <img src="../images/ban3.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        
      </div> 
    </div>
  </div>
</div>

<br>
<br>

<footer class="text-center">
  
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">Copyright &copy 2017</a></p> 
</footer>
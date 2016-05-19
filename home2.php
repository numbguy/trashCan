<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<!--<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-responsive.min.css" />-->
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" />
<script type="text/javascript" src="Bootstrap/js/JQuery.js">
</script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
 <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
	</style>
</head>


<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

<div class="container">
<div class="navbar-header">

<button type ="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Sarcastic Art</a>
</div>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="nav navbar-nav">
<li class="active"><a href="http://www.sarcasticart.in"target="_blank">Home</a></li>
<li><a href="http://www.sarcasticart.in/about-us.php" target="_blank">About</a></li>
<li><a href="http://www.sarcasticart.in"target="_blank">Contact</a></li>
</ul>
<form role="search" class="navbar-form navbar-left">
<div class="form-group">
<input type="text" placeholder="Search" class="form-control" />
</div>
</form>
<ul class="nav navbar-nav navbar-right">
<?php
if(!isset($_SESSION['user_id']))
{
	echo '<li><a href="../login module/login_form.php">Login</a></li>';
	echo '<li><a href="../login module/user_register.php">Signup</a></li>';
}
else
{
	echo '<li>';
 	echo $_SESSION['name']; 
	echo '</li>';
    echo '<li><a href="logout.php">Logout</a></li>';
}
?>
</ul>
</div>
</div>
</nav>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/1920x1080_hd_wallpaper_111_zixpkcom.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/2a3TP.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/3D_Fantasy_Places_HD_0029.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/2a3TP.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br />
<br />
<div class="container">
<div class = "row">
	<div class="col-xs-12">
    	<h3><a href="Newaddtion.php">NEW ADDITION</a></h3>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-4">
    <div class= "thumbnail">
    <img src="images/02462_myworldiswhite_1920x1080.jpg" height="350px" width="350px" />
    </div>
    </div>
    <div class="col-xs-4">
    <div class= "thumbnail">
    <img src="images/02383_rasthauszugspitzblick_1920x1080.jpg" height="350px" width="350px" />
    </div>
    </div>
   <div class="col-xs-4">
    <div class="thumbnail">
    <img src="images/02383_rasthauszugspitzblick_1920x1080.jpg" height="350px" width="350px" />
    </div>
    </div>
  </div>
</div>
<br />
<br />
<div class="container">
<div class = "row">
	<div class="col-xs-12">
    	<h3>ROGUE</h3>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-4">
    <div class= "thumbnail">
    <img src="images/02462_myworldiswhite_1920x1080.jpg" height="350px" width="350px" />
    </div>
    </div>
    <div class="col-xs-4">
    <div class= "thumbnail">
    <img src="images/02383_rasthauszugspitzblick_1920x1080.jpg" height="350px" width="350px" />
    </div>
    </div>
   <div class="col-xs-4">
    <div class="thumbnail">
    <img src="images/02383_rasthauszugspitzblick_1920x1080.jpg" height="350px" width="350px" />
    </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12" style="background-color:#A0A0A4">
    <footer class="foot">
      <p>&copy; Copyright 2015 Sarcasticart</p>
    </footer>
  </div>
</div>
</body>
</html>
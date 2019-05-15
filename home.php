<html>
<head>
<style>
.mySlides {
	display:none;
	position:absolute;
	top:40px;
	right:70px;
}

</style>
	<link rel="stylesheet" type="text/css" href="css/homecss.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="a">
	<img src="bb.jpg" width="100%" height="65%">
	<h1 id="a3">D.D.U</h1>
	<h1 id="a4">LIBRARY.</h1>
	<form action="categories.php" method="GET">
	<input type="submit" id="a2" name="q" value="Find Book" /></form>
	<?php
		session_start();

		if(isset($_SESSION['uname']))
		{
			echo '<h3><a id="a5" href="logout.php">Log out</a>';
		}
		else
		{
			echo '<h3><a id="a5" href="login.php">Login</a>';
		}		
		
	?>	
	<a id="a6" href="login.php">Sign up</a></h3>
</div>
<div class="slide">
<h1 id="a9">Recently Added Book</h1>
<h1 id="a10">Register yourself to get these books.</h1>
  <img class="mySlides" src="images/d.jpg" style="width:250px;height:400px;"/>
  <img class="mySlides" src="images/e.jpg" style="width:250px;height:400px"/>
  <img class="mySlides" src="images/f.jpg" style="width:250px;height:400px"/>

  <button id="a7" onclick="plusDivs(-1)">&#10094;</button>
  <button id="a8" onclick="plusDivs(1)">&#10095;</button>

</div><br><br>
<div id="bb">
<center>
	<h1>QR Code</h1>
	<div>
	<?php
	if(isset($_SESSION['uname']))
	{
	echo '<br><img src="./qrcode/generate.php?text=$_SESSION["uname"]">';
    }
	?>
	</div>
</center>	
</div>
<div id="hi"><center>
<details>
	<summary id="mysum">Copyright 1999-2018.</summary>
	<p id="pi1"> - by Refsnes Data. All Rights Reserved.</p>
	<p id="pi2">All content and graphics on this web site are the property of the company Refsnes Data.</p>
</details></center><br><br>
<center>
<div id="aboutmenu">
		<a href="home.php">HOME</a>
		<a href="contectus.html">CONTECT US</a>
		<a href="category.html">BOOKS</a>
		<a href="blog.html">BLOG</a>
		<a href="login.php">LOGIN</a>
</div><br>
<h1 class="glyphicon glyphicon-phone"> 1800 232 5566(TOLL FREE)</h1> 
<h2>9am-9pm,Monday to Saturday</h2><br><br><br>
<a  href="" class="fa fa-facebook-square" style="font-size:40px;color:white"></a>
<a href="" class="fa fa-google-plus-circle" style="font-size:40px;color:white"></a>
<a href="" class="fa fa-instagram" style="font-size:40px;color:white"></a>
<a href="" class="fa fa-pinterest" style="font-size:40px;color:white"></a><br>
<span style="color:white">_______________________________________________________________________________________________________________________________________________________________________________________________________________</span>
<br><br><br>

<nav>
<a href="/html/">Privacy Policy </a> |
<a href="/css/">User Agreement</a> |
<a href="/js/">Terms Of Sale</a> |
<a href="/jquery/">Security Feedback</a>
</nav>
</center>
</div>
<br><br>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>
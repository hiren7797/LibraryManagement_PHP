<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	
<script>
$(document).ready(function(){
    $("#m1").click(function(){
		$("#signup").slideUp("fast");
        $("#login").slideDown("fast");
    });
});

$(document).ready(function(){
    $("#m2").click(function(){
		$("#login").slideUp("fast");
        $("#signup").slideDown("fast");
    });
});

$(document).ready(function(){
    $("#m3").click(function(){
		$("#login").slideUp("fast");
        $("#signup").slideDown("fast");
    });
});
</script>
</head>
<body id="body">
<center>
	<?php
		session_start();
			if(isset($_GET['msg2']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['msg2']."</h2></center>";
			}
			elseif(isset($_GET['msg3']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['msg3']."</h2></center>";
			}
			elseif(isset($_GET['msg4']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['msg4']."</h2></center>";
			}
			elseif(isset($_GET['msg5']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['msg5']."</h2></center>";
			}
			elseif(isset($_GET['msg6']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['msg6']."</h2></center>";
			}
			if(isset($_GET['m1']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['m1']."</h2></center>";
			}
			elseif(isset($_GET['m2']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['m2']."</h2></center>";
			}
			elseif(isset($_GET['m3']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['m3']."</h2></center>";
			}
			elseif(isset($_GET['m4']))
			{
				echo "<center><h2 style='color:white;font-size:20px;'>".$_GET['m4']."</h2></center>";
			}
		?>
	<br>
	<form action="login_signup.php" method="POST">
	<a id="m1" type="button">LOGIN</a>
		<div id="login">
		<h1 id="n1">Login to our site</h1><br>
		<h2 id="n3">Enter your emailid and password to log on</h2><br>
		<span style="color:white">__________________________________________________</span>
		<br><br>
			<input id="l1" type="text" name="uname" placeholder="Enter Username"/><br>
			<input id="l1" type="password" name="pass" placeholder="Enter the Password"/>
			<img  style="width:150px;height:50px;display:block;" src="captcha.php"><br>
			<input id="l1" type="text" name="vercode1" placeholder="Enter the Captcha" />
			<br><br>
			<input id="l2" type="submit" name="login" value="Login" style="background-color:green;opacity:1.0;font-weight:bold;font-size:15px;"/><br>
			<center>
			
			<nav>
			<a href="forgotpaa.php">forgot password ?</a>
			<a id="m3">sign up</a> 
			</nav>
			</center>
			
		</div>
		</form>
		<form action="login_signup.php" method="GET">
		<a id="m2" type="button">SIGNUP</a>
		<div id="signup">
			<h1 id="n1">SIGN UP</h1><br>
			<span style="color:white">___________________________________________________</span>
			<br><br>
			<span id="icon"></span><input id="l3" type="text" name="username" placeholder="User Name"/><br>
			<span id="icon"></span><input id="l3" type="text" name="firstname" placeholder="First Name"/><br>
			<span id="icon"></span><input id="l3" type="text" name="lastname" placeholder="Last Name"/><br>
			<span id="icon"></span><input id="l3" type="text" name="phone_no" placeholder="Phone Number"/><br>
			<span id="icon"></span><input id="l3" type="text" name="emailid" placeholder="Email"/><br>
			<span id="icon"></span><input id="l3" type="password" name="pwd" placeholder="Password"/><br>
			<span id="icon"></span><input id="l3" type="password" name="cpwd" placeholder=" Confirm Password"/><br><br>
			<input id="n2" type="submit" name="signup" value="Sign Up" style="background-color:red;opacity:0.8;font-weight:bold;font-size:15px;"/><br>
			<center>
			<nav>
			<a href="/html/">Existing Account?</a>
			<a href="signup.css">Terms & Condition</a> 
			</nav><br>
		</form>	
		
</center>
</div>

</center>	
</body>
</html>
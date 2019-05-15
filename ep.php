<html>
<head>
<link rel="stylesheet" type="text/css" href="css/editprocss.css">
</head>
<body>
<form action="pu.php" method="GET">
<div id="proann">
Profiel aanpassen
</div>
<div id="proinf">
Personal info
</div>
<div id="u_n">
<label for="user_name"><span id="mys">Username<br></span></label>
<input id="f_n1" type="text" name="user_name" maxlength="50" size="130" placeholder="user name">
<br><span id="mys">it is not possible to change your username.<span>
</div>
<div id="f_n">
<label for="first_name"><span id="mys">Firstname<br></span></label>
<input id="f_n1" type="text" name="first_name" maxlength="50" size="130" placeholder="first name">
</div>
<div id="l_n">
<label for="last_name"><span id="mys">Lastname<br></span></label>
<input id="f_n1" type="text" name="last_name" maxlength="50" size="130" placeholder="last name">
</div>
<div id="email">
<label for="email"><span id="mys">Email<br></span></label>
<input id="f_n1" type="text" name="email" maxlength="50" size="130" placeholder="abc123@gmail.com">
</div>
<div id="p_n">
<label for="p_n"><span id="mys">Phone number<br></span></label>
<input id="f_n1" type="text" name="p_n" maxlength="50" size="130" placeholder="phonenumber">
</div>
<div id="passinfo">
Change password
</div>
<div id="passwrd">
<label for="password"><span id="mys">Password*<br></span></label>
<input id="f_n1" type="text" name="password" maxlength="50" size="130">
</div>
<div id="repeatpasswrd">
<label for="repeatpassword"><span id="mys">Repeat password*<br></span></label>
<input id="f_n1" type="text" name="repeatpassword" maxlength="50" size="130">
</div>
<div id="button">
<input id="bttn" type="submit" value="Update Profile">
</div>
</form>
</body>
</html>

<?php
	if(isset($_GET['msg']))
	{
		echo "<h2>".$_GET['msg']."</h2>";
	}
	elseif(isset($_GET['msg1']))
	{
		echo "<h2>".$_GET['msg1']."</h2>";
	}
	
	elseif(isset($_GET['m2']))
	{
		echo "<h2>".$_GET['m2']."</h2>";
	}
    	elseif(isset($_GET['m1']))
	{
		echo "<h2>".$_GET['m1']."</h2>";
	}
		
	elseif(isset($_GET['msg2']))
	{
		echo "<h2>".$_GET['msg2']."</h2>";
	}
    	elseif(isset($_GET['m7']))
	{
		echo "<h2>".$_GET['m7']."</h2>";
	}	
    elseif(isset($_GET['non']))
	{
		echo "<h2>".$_GET['non']."</h2>";
	}	
	
?>
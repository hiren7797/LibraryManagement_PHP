<?php

if(isset($_GET['signup']))
{
	try{
	if($_GET['username'] && $_GET['firstname'] && $_GET['lastname'] && $_GET['emailid'] && $_GET['phone_no'] && $_GET['pwd'] && $_GET['cpwd'])
	{
		$uname = $_GET['username'];
		$fname = $_GET['firstname'];
		$lname = $_GET['lastname'];
		$pno = $_GET['phone_no'];
		$emailid = $_GET['emailid'];
		$pass = $_GET['pwd'];
		$repass = $_GET['cpwd'];
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query=$dbhandler->prepare("select uname from `registerdata` where uname='$uname'"); 
		$count = $query->rowcount();
		if($count!=0)
		{
			header("location:login.php?m7=USERNAME  ALEARDY EXISTS");
		}
		
		if(!filter_var($emailid,FILTER_VALIDATE_EMAIL))
		{
			header("location:login.php?m2=ENTER VALID EMAILID");
		}
		if(strlen($pass) > 6)
		{
			if($pass == $repass)
			{
				$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
				$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				echo "ok";
				$sql="insert into registerdata (uname,fname,lname,phone_no,emailid,pass,repass) values ('$uname','$fname','$lname','$pno','$emailid','$pass','$repass')";
				$query=$dbhandler->query($sql);
				header("location:login.php?msg5=Successful Registration");
				//header("location:login.php");
			}
			else
			{
				header("location:login.php?m3=PASSWORD AND RE-PASSWORD ARE NOT SAME");
			}
		}
		else
		{
			header("location:login.php?m4=PASSWORD LENGHT IS LESS THAN 6");
		}
		
	}
	else
	{
		header("location:login.php?m1=FILL ALL DATA PROPER");
	}
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}
}
	
if(isset($_POST['login']))
{
	session_start();
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$eid=$_POST['uname'];
	$pass=$_POST['pass'];
	
	if(isset($_POST['uname']) && isset($_POST['pass']))
	{
		$query=$dbhandler->prepare("select uname from registerdata where uname=? and pass=? ");
		$query->execute(array($eid,$pass));
		$count = $query->rowcount();
		$q = $dbhandler->query("SELECT fname FROM `registerdata` WHERE uname='$eid'");
		$result = $q->fetch();
		$firstname = $result['fname'];
		$q1 = $dbhandler->query("SELECT lname FROM `registerdata` WHERE uname='$eid'");
		$result1 = $q1->fetch();
		$lastname = $result1['lname'];
		if($count!=0 && $_POST['vercode1'] == $_SESSION['vercode'])
		{ 
			$_SESSION["name"] = $firstname;
			$_SESSION["lname"] = $lastname;
			$_SESSION["uname"] = $eid;
			header("Location:home.php?msg1=Successful LOGIN");
			
		}
		else
		{
			header("Location:login.php?msg2=Invalid Details");
		}
	}
	else{
		header("Location:login.php?msg3=Add Proper Details");
	}
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
}
?>
<?php
try{
	if($_GET['fname'] && $_GET['lname'] && $_GET['bdate'] && $_GET['gender'] && $_GET['emailid'] && $_GET['pass'] && $_GET['repass'])
	{
		$fname = $_GET['fname'];
		$lname = $_GET['lname'];
		$bdate = $_GET['bdate'];
		$gender = $_GET['gender'];
		$emailid = $_GET['emailid'];
		$pass = $_GET['pass'];
		$repass = $_GET['repass'];
		if(!filter_var($emailid,FILTER_VALIDATE_EMAIL))
		{
			header("location:newregister.php?m2=ENTER VALID EMAILID");
		}
		if(strlen($pass) > 6)
		{
			if($pass == $repass)
			{
				$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=divyang','root','');
				$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				echo "ok";
				$sql="insert into registerdata (fname,lname,bdate,gender,emailid,pass,repass) values ('$fname','$lname','$bdate','$gender','$emailid','$pass','$repass')";
				$query=$dbhandler->query($sql);
				header("location:login.php?msg5=Successful Registration");
				//header("location:login.php");
			}
			else
			{
				header("location:newregister.php?m3=PASSWORD AND RE-PASSWORD ARE NOT SAME");
			}
		}
		else
		{
			header("location:newregister.php?m4=PASSWORD LENGHT IS LESS THAN 6");
		}
		
	}
	else
	{
		header("location:newregister.php?m1=FILL ALL DATA PROPER");
	}
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>
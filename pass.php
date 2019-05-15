<?php
session_start();
try{
	$uname = $_GET['uname'];
	$eid = $_GET['emailid'];
	if(isset($_GET['uname']) && isset($_GET['emailid']))
	{
		$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=divyang','root','');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query = $dbhandler->query("SELECT emailid FROM `registerdata` WHERE uname='$uname'");
		$count = $query->rowcount();
		if($count != 0)
		{
			$msg="OTP number is 12345";
			$msg=wordwrap($msg,70);
			mail($eid,"OTP",$msg);
			header('Location:forgotpaa.php?msg2=succcessfully send');
		}else{
			header('Location:forgotpaa.php?msg1=Invalid Details');
		}
	}else
	{
		header('Location:forgotpaa.php?msg=Please Fill The DATA');
	}
}	
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>	
<html>
<body>

<?php
session_start();
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=divyang','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$eid=$_POST['emailid'];
	$pass=$_POST['pass'];
	
	if(isset($_POST['emailid']) && isset($_POST['pass']) && isset($_POST['vercode1']))
	{
		$query=$dbhandler->prepare("select emailid from registerdata where emailid=? and pass=? ");
		$query->execute(array($eid,$pass));
		$count = $query->rowcount();
		$q = $dbhandler->query("SELECT fname FROM `registerdata` WHERE emailid='$eid'");
		$result = $q->fetch();
		$date = $result['fname'];
		$q1 = $dbhandler->query("SELECT lname FROM `registerdata` WHERE emailid='$eid'");
		$result1 = $q1->fetch();
		$lname = $result1['lname'];
		if($count!=0 && $_POST['vercode1'] == $_SESSION['vercode'] )
		{ 
			$_SESSION["name"] = $date;
			$_SESSION["lname"] = $lname;
			$_SESSION["eid"] = $eid;
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
?>

</body>
</html>
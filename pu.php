<?php

  if(($_GET['user_name']) && ($_GET['first_name']) &&($_GET['last_name'])&($_GET['email']) &&($_GET['p_n'])&&($_GET['password'])&& ($_GET['repeatpassword']))
  {
	$uname=$_GET['user_name'];
    $fn=$_GET['first_name'];
	$ln=$_GET['last_name'];
    $emailid = $_GET['email'];
	$pn=$_GET['p_n'];
    $pass=$_GET['password'];
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $query=$dbhandler->prepare("select uname from registerdata where uname=?");
		$query->execute(array($uname));
		$count = $query->rowcount();
    if($count==0)
    {
		header("location:ep.php?non=No User Exists");
	}		
      if(!filter_var($emailid,FILTER_VALIDATE_EMAIL))
	{
		header("location:ep.php?m2=ENTER VALID EMAILID");
	}
	if(strlen($pass) > 6)
 {
	if($_GET['password']==$_GET['repeatpassword'])
	{		
      
	  $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
				$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				echo "ok";
				$sql="update registerdata set uname='$uname',fname='$fn',lname='$ln',phone_no='$pn',emailid='$emailid',pass='$pass',repass='$pass' where uname='$uname'";
				$query=$dbhandler->query($sql);
               header('Location:ep.php?msg2=Your Profile Updated');
	
	}
 
     else
    {
 	  header('Location:ep.php?msg1=Check your both  Password');
    }
  }
  else
  {
	    header('Location:ep.php?m1=your Password length is less than 6.');
  }
 }
  else
   {
	 header('Location:ep.php?msg=Please Fill Require Data');
	 
	 }

?>
<html>
<head>
<?php
session_start();

	if(isset($_SESSION['name']))
	{
		unset($_SESSION['name']);
		session_destroy();
		header("location:login.php?msg4=Successful LOGOUT");
	}	
	else
	{
		header("location:login.php?msg4=Please Login First");
	}
?>

</body>
</html>
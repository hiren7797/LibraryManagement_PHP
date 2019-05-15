<html>
<head>
<style>
.mySlides {
	display:none;
	position:absolute;
	top:40px;
	right:70px;
}</style>
	<link rel="stylesheet" type="text/css" href="css/consuccess.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
	</head>
<body>
<div id="a">
	<img src="images/contaci.jpg" width="100%" height="70%">
	<h1 id="a3">D.D.U</h1>
	<h1 id="a4">LIBRARY.</h1>
	<form action="categories.php" method="GET">
	<input type="submit" id="a2" name="q" value="Find Book" /></form>
	<?php
	echo '<h3><a id="a5" href="logout.php">Log out</a>';
	?>
</div>


<?php
if(isset($_POST['email'])) {
 
    $email_to = $_POST['email'];
    $email_subject = "WE will Contact you soon";
 
    function died($error) {
        // your error code can go here
        echo "<h3 id='ec'> We are very sorry, but there were error(s) found with the form you submitted. </h3>";
        echo "<h3 id='ec'> These errors appear below.<br /><br /></h3>";
        echo "<h3 id='ec'>$error.<br /><br /></h3>";
        echo "<h3 id='ec'>Please go back and fix these errors.<br /><br /></h3>";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = 'hirenbarad7797@gmail.com'; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
	
	$email_message .="First Name: ".clean_string($first_name)."\n";
    $email_message .="Last Name: ".clean_string($last_name)."\n";
    $email_message .="Email: ".clean_string($email_from)."\n";
    $email_message .="Telephone: ".clean_string($telephone)."\n";
    $email_message .="Comments: ".clean_string($comments)."\n";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$result=mail($email_to,$email_subject,$email_message,$headers);
	  // create email header
   if(!$result)
   {
		 echo "sorry there is some sort of problem ";
   }
   else
	   
    {
	   echo"THANK YOU FOR CONTACTING US. WE WILL BE IN TOUCH WITH YOU VERY SOON";
   }
	 ?>
 
<!-- include your own success html here -->


<?php
 
}
?>
</body>
</html>
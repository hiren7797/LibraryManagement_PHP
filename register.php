<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table registerdata ( 
        uname VARCHAR(30) NOT NULL PRIMARY KEY,
		fname VARCHAR(30) NOT NULL,
		lname VARCHAR(30) NOT NULL,
		phone_no BIGINT(10),
		emailid VARCHAR(30) NOT NULL,
		pass VARCHAR(30) NOT NULL,
		repass VARCHAR(30) NOT NULL,
        posted datetime	
		)";
	$query=$dbhandler->query($sql);
	echo "Table is created successfully";
		
		
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
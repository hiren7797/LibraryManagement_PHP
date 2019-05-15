<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="create table itemdata ( 
        bookid INT(10) NOT NULL PRIMARY KEY,
		bookname VARCHAR(30) NOT NULL,
		authorname VARCHAR(30) NOT NULL,
		dept VARCHAR(30) NOT NULL,
		sem INT(2) NOT NULL,
		edition INT(3) NOT NULL,
		qauntity INT(3) NOT NULL,
		
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
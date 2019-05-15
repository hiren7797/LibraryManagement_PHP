<?php


    include './includes/header.php';
?>

        <br><br>
<form action="book.php" method="GET">
        <?php
			 $cat = '';
			if(isset($_GET['q'])){
				$cat = $_GET['q'];}
			   else{
				header('Location: '.BaseAddress);
			}
			$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=library','root','');
			$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $query=$dbhandler->prepare('SELECT * FROM itemdata WHERE deptname = ?');
			$query->execute(array($cat));
			
			while($r=$query->fetch()){
			//echo specific attributes
			
			include './items.php';
			
			//echo all data in both format: numeric and associative
			}
		
			//$cardObject = $pdo->prepare('SELECT * FROM items WHERE `Category`= :cat AND `Deprecated`=0 ORDER by `ID` DESC');
            //$cardObject->execute(['cat' => $cat]);
            //include 'login.php';
        ?>
</form>
      

<?php
//include './includes/footer.php';
?>
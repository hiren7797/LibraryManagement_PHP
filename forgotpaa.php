<html>
<body>
<br><br><br><br><br>
<center>

<form action="pass.php" method="GET">
	<div class="menu1">
		<table><tr><td><label class="labelclass">USERNAME:</label><input id="textclass" type="text" name="uname"/></td></tr></table>
	</div>
	<div class="menu1">
			<table><tr><td><label class="labelclass">EMAIL_ID:</label><input id="textclass" type="text" name="emailid"/></td></tr></table>
	</div>
	
		<table><tr><td><input id="button" type="submit" name="submit" value="GO"/></td></tr></table>
	
	
</form>	
<br><br>
<?php
	if(isset($_GET['msg']))
	{
		echo "<center><h2>".$_GET['msg']."</h2></center>";
	}
	elseif(isset($_GET['msg1']))
	{
		echo "<center><h2>".$_GET['msg1']."</h2></center>";
	}
	elseif(isset($_GET['msg2']))
	{
		echo "<center><h2>".$_GET['msg2']."</h2></center>";
	}
	
?>
</center>

</body>
</html>
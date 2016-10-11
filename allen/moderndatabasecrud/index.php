<?php
	//include the database class
	include("inc/database.class.php");
	
	//make a Database object called db
	$db = new Database();
	
	//Access the $dbHost variable
	//echo $db->dbHost;
	
	//Call the getDatabaseUsername function to get $dbhost value
	echo $db->getDatabaseUsername();
	
	
?>
<!--
<!DOCTYPE html>
<html>

	<head>
	
	</head>
	
	<body>

	</body>
</html>
-->
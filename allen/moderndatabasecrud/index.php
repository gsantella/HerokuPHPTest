<?php
	//include the database class
	include("inc/database.class.php");
	
	//make a Database object called db
	$dbConn = new Database();
	
	//Access the $dbHost variable
	//echo $db->dbHost;
	
	//Call the getDatabaseUsername function to get $dbhost value
	//echo $dbConn->getDatabaseUsername();
	
	$result = $dbConn->getAllData();
	print_r($result);
	
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
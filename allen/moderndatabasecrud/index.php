<?php
	//include the database class
	include("inc/database.class.php");
	
	//make a Database object called db
	$dbConn = new Database();
	
	print_r($dbConn->getAllData());
	
	$dbConn->create(array("15724 - Allen"));
	$dbConn->create(array("15701 - Allen"));
	$dbConn->create(array("15714 - Allen"));
	
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
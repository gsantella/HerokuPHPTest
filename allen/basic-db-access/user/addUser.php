<?php

	include("../inc/db_functions.php");

	echo $dsn;
	
	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		echo $firstName;
		
		//$stmt= $database->prepare("INSERT INTO students (firstName) VALUES (:firstValue);");
		//$stmt->bindParam(':firstValue', $firstName);
		//$stmt->execute();
		
		//Header("Location: ../");
	}
	else
	{
		echo "The firstName was not passed!";
	}
<?php
	include("../inc/db_functions.php");
	
	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		$stmt= $database->prepare("INSERT INTO students (first_name) VALUES (:firstValue);");
		$stmt->bindParam(':firstValue', $firstName);
		$stmt->execute();
		
		Header("Location: ../");
	}
	else
	{
		echo "The First Name was not passed!";
	}
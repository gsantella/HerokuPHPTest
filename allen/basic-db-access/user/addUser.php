<?php

	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		include("http://desolate-lake-64893.herokuapp.com/allen/basic-db-access/inc/db_functions.php");
		
		$stmt= $database->prepare("INSERT INTO students (firstName) VALUES (':firstValue');");
		$stmt->execute(['firstValue' => $firstName]);

		//Header("Location: ../");
	}
	else
	{
		echo "The firstName was not passed!";
	}
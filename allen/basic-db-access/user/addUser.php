<?php

	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		include("http://desolate-lake-64893.herokuapp.com/allen/basic-db-access/inc/db_functions.php");
		
		$stmt= $database->prepare("INSERT INTO students (firstName) VALUES (':firstValue');");
		
		if($stmt->execute(['firstValue' => $firstName]))
		{
			echo "Successful";
		}
		else
		{
			echo "Unsuccessful";
		}

		//Header("Location: ../");
	}
	else
	{
		echo "The firstName was not passed!";
	}
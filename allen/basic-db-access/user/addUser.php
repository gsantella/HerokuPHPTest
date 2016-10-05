<?php

	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		include("http://desolate-lake-64893.herokuapp.com/allen/basic-db-access/inc/db_functions.php");
		
		echo($firstName);
		
		if($stmt = $database->query("INSERT INTO students (first_name) VALUES ('$firstName');"))
		{
			echo("Query was successful");
		}
		else
		{
			echo "Query unsuccessful.";
		}
		
		//Header("Location: ../");
	}
	else
	{
		echo "The firstName was not passed!";
	}
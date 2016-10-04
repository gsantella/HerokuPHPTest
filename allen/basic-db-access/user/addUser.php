<?php

	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		include("../inc/db_fuctions.php");
		
		insert("INSERT INTO students (first_name) VALUES ('$firstName') ");
		
		Header("Location: ../");
	}
	else
	{
		echo "The firstName was not passed!";
	}
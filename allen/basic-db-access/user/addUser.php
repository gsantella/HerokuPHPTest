<?php
	include("../inc/db_functions.php");
	
	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		insert($firstName);
		
		Header("Location: ../");
	}
	else
	{
		echo "The First Name was not passed!";
	}
<?php
	include("../inc/db_functions.php");
	
	if(isset($_POST['delId']))
	{
		$id = $_POST['delId'];
		
		deleteFrom($id);
	
		Header("Location: ../");
	}
	else
	{
		echo "The ID Number was not passed!";
	}
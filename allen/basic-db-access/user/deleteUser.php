<?php
	include("../inc/db_functions.php");
	
	if(isset($_REQUEST['delId']))
	{
		$id = $_REQUEST['delId'];
		
		deleteFrom($id);
	
		Header("Location: ../");
	}
	else
	{
		echo "The ID Number was not passed!";
	}
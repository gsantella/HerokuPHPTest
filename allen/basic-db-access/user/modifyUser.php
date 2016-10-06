<?php
	include("../inc/db_functions.php");
	
	if(isset($_POST['modId']))
	{
		if (isset($_POST['modName']))
		{
			$id = $_POST['modId'];
			$firstName = $_POST['modName'];
			
			modify($id, $firstName);
			
			//Header("Location: ../");
		}
	}
	else
	{
		echo "A paramater was not passed!";
	}
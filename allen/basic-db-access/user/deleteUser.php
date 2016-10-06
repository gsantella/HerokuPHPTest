<?php
	include("../inc/db_functions.php");
	
	if(isset($_REQUEST['delId']))
	{
		$id = $_REQUEST['delId'];
		
		$stmt= $database->prepare("DELETE FROM students WHERE id=:id ");
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	
		Header("Location: ../");
	}
	else
	{
		echo "The ID Number was not passed!";
	}
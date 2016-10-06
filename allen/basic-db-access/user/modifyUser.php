<?php
	include("../inc/db_functions.php");
	
	if(isset($_POST['modId']))
	{
		if (isset($_POST['modName']))
		{
			$id = $_POST['modId'];
			$firstName = $_POST['modName'];
			
			$stmt= $database->prepare("UPDATE students SET first_name=:name WHERE id=:id ");
			$stmt->bindValue(':name', $firstName, PDO::PARAM_STR);
			$stmt->bindValue(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			
			//Header("Location: ../");
		}
	}
	else
	{
		echo "A paramater was not passed!";
	}
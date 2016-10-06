<?php
	include("../inc/db_functions.php");
	
	if(isset($_POST['delId']))
	{
		$id = $_POST['delId'];
		
		$stmt= $database->prepare("DELETE FROM 'students' WHERE 'id' = :id;");
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		
		echo $stmt->rowCount() . " Rows Affected.";
		
		//Header("Location: ../");
	}
	else
	{
		echo "The ID Number was not passed!";
	}
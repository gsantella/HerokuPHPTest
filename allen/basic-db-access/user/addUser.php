<?php
	include("../inc/db_functions.php");
	

  if(isset($_REQUEST['add']))
  {

       
	if(isset($_POST['firstName']))
	{
		$firstName = $_POST['firstName'];
		
		$stmt= $database->prepare("INSERT INTO students (first_name) VALUES (:firstValue);");
		$stmt->bindParam(':firstValue', $firstName);
		$stmt->execute();
		
		Header("Location: ../");
	}
	else
	{
		echo "The First Name was not passed!";
	}

  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add new user</title>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <h1>Add Another User</h1>
	
	<form method='post' >
		<input type='text' name='firstName' />
		<input type='hidden' name='add' value='1' />
		<input type='submit' value='Add User' />
	</form>
  </body>
</html>

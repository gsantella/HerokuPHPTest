<?php
	include("../inc/db_functions.php");
	
	if(!isset($_REQUEST['change']))
	{
		if(isset($_REQUEST['modId']))
		{
			if (isset($_POST['modName']))
			{
				$id = $_REQUEST['modId'];
				$firstName = $_POST['modName'];
				
				$stmt= $database->prepare("UPDATE students SET first_name=:name WHERE id=:id ");
				$stmt->bindValue(':name', $firstName, PDO::PARAM_STR);
				$stmt->bindValue(':id', $id, PDO::PARAM_INT);
				$stmt->execute();
				
				Header("Location: ../");
			}
		}
		else
		{
			echo "A paramater was not passed!";
		}
	}
	else
	{
		if(isset($_REQUEST['modId']))
		{
			if(isset($_REQUEST['modNameGet']))
			{
				$id = $_REQUEST['modId'];
				$firstName = $_REQUEST['modNameGet'];
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<table> 
		<th class='text-left'>Id</th> 
		<th class='text-left'>First Name</th> 
		
		<tr> 
			<td class='text-left'><?= $row['id']; ?></td> 
			<td class='text-left'><?= $row['first_name']; ?></td> 
		</tr>
	</table>
	
	<p>
		What would you like to modify this name to?
		
		<form method="get">
			<input type="text" name="modNameGet" />
			<input type="hidden" name="modId" value="<?= $row['id']; ?>" />
			<input type="hidden" name="change" value="1" />
			<input type="submit" value="Change Name" />
		</form>
	</p>
	
</body>
</html>
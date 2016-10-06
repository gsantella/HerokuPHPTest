<?php 
	include("inc/db_functions.php"); 
	$result = $database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);
	//Run a SELECT SQL statement to get results
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Basic Databse Access</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		
		<table class="table-fill">
			<thead>
				<tr>
					<th class="text-left">Id</th>
					<th class="text-left">First Name</th>
				</tr>
			</thead>
			
			<tbody class="table-hover">
				<?php foreach($result as $row): ?>
					<tr>
						<td class="text-left"><?= $row["id"]; ?></td>
						<td class="text-left"><?= $row["first_name"]; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<p id="addPerson">
			Add:
			<form action="user/addUser.php" method="post">
				<input type="text" name="firstName" />
				<input type="submit" value="Add Person" />
			</form>
		</p>
		
		<p id="deletePerson">
			Delete by id:
			<form action="user/deleteUser.php" method="post">
				<input type="text" name="delId" />
				<input type="submit" value="Remove Person" />
			</form>
		</p>
		
		<p id="modifyPerson">
			Modify:
			<form action="user/modifyUser.php" method="post">
				Id:
				<input type="text" name="modId" /><br/>
				Name:
				<input type="text" name="modName" />
				<input type="submit" value="Modify Person" />
			</form>
		</p>
	</body>
</html>

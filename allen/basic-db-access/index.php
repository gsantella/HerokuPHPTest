<?php 
	include("inc/db_functions.php"); 
	$result = $database->query("SELECT * FROM students ORDER BY students.id;")->fetchAll(PDO::FETCH_ASSOC);
	//Run a SELECT SQL statement to get results
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Basic Database Access</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		
		<table class="table-fill">
			<thead>
				<tr>
					<th class="text-left">Id</th>
					<th class="text-left">First Name</th>
					<th class="text-left">Operations</th>
				</tr>
			</thead>
			
			<tbody class="table-hover">
				<?php foreach($result as $row): ?>
					<tr>
						<td class="text-left"><?= $row["id"]; ?></td>
						<td class="text-left"><?= $row["first_name"]; ?></td>
						<td class="text-left">
							<a href='user/deleteUser.php?delId=<?= $row["id"]; ?>'>Delete</a>
							<br/><br/>
							<a href='user/modifyUser.php?modId=<?= $row["id"]; ?>&change=1&oldName=<?= $row["first_name"]; ?>'>Modify</a>
						</td>
					</tr>
				<?php endforeach; ?>
                                
                                <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                                <a href='user/addUser.php'>Create New </a>
                                        </td>
                                </tr>
			</tbody>
		</table>
		
                <!-- No longer need 

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

                -->
	</body>
</html>

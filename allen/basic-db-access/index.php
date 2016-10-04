<?php include("inc/db_functions.php"); ?>
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
		
		<p>
			<form action="user/adduser">
				<input type="text" name="firstName" />
				<input type="submit" value="Add Person" />
			</form>
		</p>
	</body>
</html>

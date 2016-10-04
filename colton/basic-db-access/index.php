<?php include("inc/db_functions.php"); ?> 
<!DOCTYPE html>
<html>

	<head> 
		<title>Basic Database Access</title>
		<link rel="stylesheet" href="css/main.css" />
	</head>

		<body>
				<?= $result[0]["first_name"]; ?>
				
				<div class="table-title">
					<h3>Data Table</h3>
				</div>
				
			<table class="table-fill">
				<thead>
				<tbody class="table-hover">
						<tr>
							<th class="text-left">Id</th>
							<th class="text-left">First Name</th>
						</tr>
					</thead>
					<?php foreach($result as $row): ?>
						<tr>
							<td class="text-left"><?= $row["id"]; ?></td>
							<td class="text-left"><?= $row["first_name"]; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			
		<p id="addPerson">
		<form action="addUser.php" method="post">
			<input type="text" name="firstName" />
			<input type="submit" value="Add Person" />
		</form>
		
	</body>

</html>
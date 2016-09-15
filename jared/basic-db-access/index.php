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
			<h3>Students Table</h3>
		</div>
		<table class="table-fill">
			<tr>
				<th class="text-left">Id</th>
				<th class="text-left">First Name</th>
			</tr>
			<tbody class="table-hover">
				<?php foreach($result as $row): ?>
					<tr>
						<td class="text-left"><?= $row["id"]; ?></td>
						<td class="text-left"><?= $row["first_name"]; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<p> the number of rows in the table: <?= $result->rowcount(); ?></p>
		
		<table>
		
			<tr>
				<td>1</td>
				<td>ford<td>
				<td>focus</td>
			</tr>
			<tr>
				<td>1</td>
				<td>ford<td>
				<td>f 150</td>
			</tr>
			<tr>
				<td>1</td>
				<td>ford<td>
				<td>fusion</td>
			</tr>
		</table>
	</body>
	
</html>
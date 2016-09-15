<?php include("inc/db_functions.php"); ?>
<!DOCTYPE html>
<html>

	<head>
		<title>Basic Database Access</title>
	</head>

	<body>
		<?= $result[0]["first_name"]; ?>
		
		<table>
		<?php foreach($result as $row): ?>
			<tr>
				<td><?= $row["id"]; ?></td>
				<td><?= $row["first_name"]; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
		
		<p> the number of row in the table: <?= $result->rowcount(); ?></p>
		
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
<?php include("inc/db_functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>basic database access</title>
</head>
<body>
	<?=($result[0]["first_name"]); ?>
	<div class="table-title">
		<h3>Data Table</h3>
	</div>
	<table class="table-fill">
	<thead>
	
	<tr>
		<th class="text-left">ID</th>
		<th class="text-left">First Name</th>
	</tr>
	<tbody class="table-hover">
		<?php foreach($result as $row): ?>
		<tr>
			<td><?= $row["id"]; ?></td>
			<td><?= $row["first_name"]; ?></td>
		</tr>
		<?php endforeach ; ?>
	</tbody>
	</table>
		
	<p>the number of rows in the table: <?= $result->rowCount(); ?></p>
	<table>
		<tr><td>1</td><td>Ford</td><td>Focus</td></tr>
		<tr><td>2</td><td>Ford</td><td>Fusion</td></tr>
		<tr><td>3</td><td>Ford</td><td>F150</td></tr>
	</table>
</body>
</html>
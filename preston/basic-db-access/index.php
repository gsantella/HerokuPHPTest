<?php include("inc/db_functions.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Basic Database Access</title>
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?= $result[0]["first_name"]; ?>
	
	
</body>

	<div class="table-title">
	<h3>Data Table</h3>
	</div>

	<table class="table-fill">
	<thead>
	<tr>
		<th class="text-left">Month</th>
		<th class="text-left">Sales</th>
	</tr>
	</thead>
	<tbody class="table-hover">
	<?php foreach($result as $row): ?>
		<tr>
			<td class="text-left">><?= $row["id"]; ?></td>
			<td class="text-left">><?= $row["first_name"]; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>

	<p> The number of rows in the table: <? $result->rowCount(); ?></p>
	
	<table>
		<tr>
			<td>1</td>
			<td>Ford</td>
			<td>Focus</td>
		</tr>
			<td>2</td>
			<td>Ford</td>
			<td>Focus</td>
		<tr>
			<td>3</td>
			<td>Ford</td>
			<td>Focus</td>		
		</tr>
		

		
	</table>

</html>
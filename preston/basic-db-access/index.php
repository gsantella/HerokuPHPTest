<?php include("inc/db_functions.php"); 

?>

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
		<th class="text-left">ID</th>
		<th class="text-left">First Name</th>
		<th class="text-left">Operations</th>
	</tr>
	</thead>
	<tbody class="table-hover">
	<?php foreach($result as $row): ?>
		<tr>
			<td class="text-left"><?= $row["id"]; ?></td>
			<td class="text-left"><?= $row["first_name"]; ?></td>
			<td class="text-left"><a href="deletewebform.php?id=<?= $row["id"];?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</table>



</html>
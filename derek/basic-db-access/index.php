<?php include("inc/db_functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>basic database access</title>
</head>
<body>
	<?=($result[0]["first_name"]); ?>
	
	<table>
	<?php foreach($result as $row): ?>
	<tr>
		<td><?= $row["id"]; ?></td>
		<td><?= $row["first_name"]; ?></td>
	</tr>
	<?php endforeach ; ?>
	</table>
	
	<table>
		<tr><td>1</td><td>Ford</td><td>Focus</td></tr>
		<tr><td>2</td><td>Ford</td><td>Fusion</td></tr>
		<tr><td>3</td><td>Ford</td><td>F150</td></tr>
	</table>
</body>
</html>
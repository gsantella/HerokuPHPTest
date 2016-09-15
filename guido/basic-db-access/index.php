<?php include("inc/db_functions.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Basic Database Access</title>
</head>

<body>
	<?= $result[0]["first_name"]; ?>
	
	<table>
		<tr>
			<td>1</td>
			<td>Ford</td>
			<td>Focus</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Ford</td>
			<td>Fusion</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Ford</td>
			<td>F150</td>
		</tr>
	</table>
</body>

</html>
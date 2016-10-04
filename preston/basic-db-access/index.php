<?php include("inc/db_functions.php"); 
//Get data from webform
$data = array($_REQUEST["first_name"],
			 $_REQUEST["last_name"],
			 $_REQUEST["favorite_color"],
			 $_REQUEST["password"]
			 );

//Open file database.csv for appending 
$database = fopen("database.csv", "a");

//Write POSTed $data to file
fputcsv($database, $data);

//Close the file
fclose($database);
//Open file database.csv for appending 
$database = fopen("database.csv", "r");

//Read each line and print to screen 
while(!feof($database))
{
	$line = fgets($database);
	$data = str_getcsv($line);
 	echo "First Name: " . $data[0] . "<br />";
	echo "Last Name: " . $data[1] . "<br />";
	echo "Favorite Color: " . $data[2] . "<br />";
	echo "Password: " . $data[3] . "<br />";
}
	
//Close the file
fclose($database);
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
	</tr>
	</thead>
	<tbody class="table-hover">
	<?php foreach($result as $row): ?>
		<tr>
			<td class="text-left"><?= $row["id"]; ?></td>
			<td class="text-left"><?= $row["first_name"]; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>



</html>
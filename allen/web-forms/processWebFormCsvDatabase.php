<?php

//Get data from webform
$data = array(
			$_REQUEST["first_name"],
			$_REQUEST["last_name"],
			$_REQUEST["favorite_color"],
			$_REQUEST["password"]
		);

//open file for appending
$database = fopen("database.csv", "a");

//Write POSTed variable $data to file
fputcsv($database, $data);

//Be Nice! - Close the file
fclose($database);

header('Location: viewwebfornscvdatabase.php');
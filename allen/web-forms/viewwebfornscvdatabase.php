<?php

//Get data from webform
$data = array(
			$_REQUEST["first_name"],
			$_REQUEST["last_name"],
			$_REQUEST["favorite_color"],
			$_REQUEST["password"]
		);

//open database for reading
$database = fopen("database.csv", "r");

//Read each line and print to screen
while (!feof($database))
{
	$line = fgets($database);
	echo $line;
}

//Be Nice! - Close the database
fclose($database);
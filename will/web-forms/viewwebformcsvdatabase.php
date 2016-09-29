<?php

//Get data from webform
$data = array( $_REQUEST["first_name"],
			   $_REQUEST["last_name"],
			   $_REQUEST["favorite_color"],
			   $_REQUEST["password"]
			  );
			  
//Open file database
$database = fopen("database.csv", "r");

//Read each line and print to screen
while(!feof($database))
{
	$line= fgets($database);
	$data = str_getcsv($line);
	echo "First Name: " . $data[0] . "<br />";
	echo "Last Name: " . $data[1] . "<br />";
	echo "Favorite Color: " . $data[2] . "<br />";
	echo "Password: " . $data[3] . "<br />";
}

//close the database
fclose($database);
<?php

//open the database
$database = fopen("database.csv", "r");

//read each line and print to screen
while(!feof($database))
{
	$line = fgets($database);
	$data = str_getcsv($line);
	echo "First Name: " . $data[0] . "<br />";
	echo "Last Name: " . $data[1] . "<br />";
	echo "favorite Color: " . $data[2] . "<br />";
	echo "Password: " . $data[3] . "<br />";
}

//close the database
fclose($database);
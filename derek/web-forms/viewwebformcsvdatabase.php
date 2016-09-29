<?php

$database = fopen("database.csv","r")

//read each line and print to screen
while(!feof($database))
{
	$line = fgets($database);
	$data = str_getcsv($line);
	echo "First Name: ", $data[0];
}

fclose($database);
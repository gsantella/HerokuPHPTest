<?php

$filename = "database.csv";

if (file_exists($filename))
{
	//open database for reading
	$database = fopen($filename, "r");

	//Read each line and print to screen
	while (!feof($database))
	{
		$line = fgets($database);
		$data = str_getcsv($line);
		
		echo "First Name: " . $data[0] . "<br/>";
		echo "Last Name: " . $data[1] . "<br/>";
		echo "Favorite Color: " . $data[2] . "<br/>";
		echo "Password: " . $data[3] . "<br/>";
	}

	//Be Nice! - Close the database
	fclose($database);
}
<?php

//OPEN FILE FOR APPENDING
$database = fopen("database.csv","r");


//READ EACH LINE AND PRINT TO SCREEN
while(!feof($database))
{
	$line = fgets($database);
	$data = str_getcsv($line);
	echo "First Name: " . $data[0] . "<br>";
	echo "Last Name: " . $data[1] . "<br>";
	echo "Favorite Color: " . $data[2] . "<br>";
	echo "Password: " . $data[3] . "<br>";
}

//CLOSE FILE
fclose($database);
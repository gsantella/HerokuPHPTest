<?php 

//Open file database.csv for appending 
$database = fopen("database.csv", "r");

//Read each line and print to screen 
while(!feof($database))
{
	$line = fgets($database);
	$data = str_getcsv($line);
 	echo "First Name: " . $data[0] . "<br />";

}
	
//Close the file
fclose($database);
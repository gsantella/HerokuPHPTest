<?php 

//Open file database.csv for appending 
$database = fopen("database.csv", "r");

//Read each line and print to screen 
while(!feof($database))
{
	$line = fgets($database);
	echo $line;
}
	
//Close the file
fclose($database);
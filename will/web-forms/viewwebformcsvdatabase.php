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
	echo $line;
}

//close the database
fclose($database);
<?php

//OPEN FILE FOR APPENDING
$database = fopen("database.csv","r");



//READ EACH LINE AND PRINT TO SCREEN
while(!feof($database)
{
	$line = fgets($database);
	echo $line;
}

//CLOSE FILE
fclose($database);
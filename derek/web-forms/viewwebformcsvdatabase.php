<?php

$database = fopen("database.csv","a")

//read each line and print to screen
while(!feof($database))
{
	$line = fgets($database);
	echo= $line;
}

fclose($database);
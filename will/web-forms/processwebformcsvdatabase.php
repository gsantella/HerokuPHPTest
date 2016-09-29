<?php

//Get data from webform
$data = array( $_REQUEST["first_name"],
			   $_REQUEST["last_name"],
			   $_REQUEST["favorite_color"],
			   $_REQUEST["password"]
			  );
			  
//Open file database.csv for appending
$database = fopen("database.csv", "a");

//write POSTed $data to file
fputcsv($database, $data);

//close the file
fclose($database);
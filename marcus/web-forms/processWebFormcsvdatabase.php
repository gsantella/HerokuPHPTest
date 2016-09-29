<?php

//GET DATA FROM WEBFORM
$data = array($_REQUEST["first_name"],
			  $_REQUEST["last_name"], 
			  $_REQUEST["favorite_color"],
			  $_REQUEST["password"]
);

//OPEN FILE FOR APPENDING
$database = fopen("database.csv","a");

//WRITE POSTED $DATA TO FILE
fputcsv($database, $data);

//CLOSE FILE
fclose($database);

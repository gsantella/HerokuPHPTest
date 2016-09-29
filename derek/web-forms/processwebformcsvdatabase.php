<?php
$data = array( $_REQUEST["first_name"], 
			   $_REQUEST["last_name"], 
			   $_REQUEST["favorite_color"],
			   $_REQUEST["password"]
			 );
$database = fopen("database.csv", "a");
fputcsv($database, $data);
print_r($_REQUEST);
<?php
//Webform
//Get data from webform
$data = array($_REQUEST["first_name"],
			 $_REQUEST["last_name"],
			 $_REQUEST["favorite_color"],
			 $_REQUEST["password"]
			 );

//Open file database.csv for appending 
$database = fopen("database.csv", "a");

//Write POSTed $data to file
fputcsv($database, $data);

//Close the file
fclose($database);



//swassssss
//Create connection by logging in and selecting database 
$host= "ec2-23-21-234-201.compute-1.amazonaws.com";
$db= "ddf1ndt04b3tti";
$user= "fpkkqmtaywxfwm";
$pass= "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a SELECT SQL STATEMENT
$result = $database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);



//Close connection  
//Ignore for now 
?>
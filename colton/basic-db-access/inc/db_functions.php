<?php
//Create a connection by logging in and selecting database(login)
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a SELECT SQL Statement to get results
$result = $database->query("SELECT * FROM students;")->fetchALL(PDO::FETCH_ASSOC);

//Close connection (logout)
//Ignore for now 
?>
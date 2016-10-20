<?php

//Create Connection : Login + Select Database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a SELECT SQL Statement To Get Results
//$result = $database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);

//To Update SQL Statement
$data=array($_REQUEST["id"],$_REQUEST["first_name"]);

print_r($data);

$stmt=$database->prepare("UPDATE students SET first_name=? WHERE id=?;");
$stmt->execute($data);

//Close Connection
//Ignore For Now . . 

<?php

//Create Connection : Login + Select Database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a INSERT SQL Statement
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$stmt = $database->prepare("INSERT INTO students(id, first_name) VALUES(?, ?);");
$stmt->execute(array($id, $name));

//Display affected rows
$affected_rows = $stmt->rowCount();
echo "$affected_rows have been affected!";

//Link to R in CRUD
echo "<a href='../basic-db-access'>View Data</a>";

//Close Connection
//Ignore For Now . . 

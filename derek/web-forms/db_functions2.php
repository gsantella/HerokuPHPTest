<?php

//create connection by logging in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a INSERT SQL Statement
$ID = $_REQUEST["ID"];
$stmt = $database->prepare("DELETE FROM students WHERE ID = ?;");
$stmt->execute(array($ID));
echo $_REQUEST["ID"];

//close connection
//ignore for now
?>
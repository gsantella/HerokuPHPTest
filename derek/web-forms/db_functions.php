<?php
//create connection by logging in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";
$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);
echo $_REQUEST;
$name = $_REQUEST["name"];
//Run a SELECT SQL Statement
$stmt = $db->prepare("INSERT into students(first_name) VALUES (?)");
$stmt->execute(array($name));


//close connection
//ignore for now
?>
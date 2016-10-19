<?php

//Create Connection : Login + Select Database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a SELECT SQL Statement To Get Results
$result=$database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);

//To Update SQL Statement
$stmt = $db->prepare("INSERT INTO students(fieldA,fieldB,fieldC) VALUES(:fieldA,:fieldB,:fieldC)");
$stmt -> execute(array(':fieldA'=>$fieldA, ':fieldB'=>$fieldb, 'fieldC'=>$fieldC));
$affected_rows = $stmt -> rowCount();

//Close Connection
//Ignore For Now . . 

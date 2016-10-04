<?php
//Create connection by loggin in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
	    //POST Gress
$database = new PDO($dsn);

//Run a SELECT SQL statement to get results
$result = $database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);

//Close connection
//IGNORE FOR NOW

function insert($sql){
	//$pdo = $database
	$stmt = $database->prepare($sql);
	$stmt->execute();
}













?>
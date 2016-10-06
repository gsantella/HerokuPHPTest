<?php
//Create connection by loggin in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
	    //POST Gress
$database = new PDO($dsn);

$data = array($_REQUEST['name'], $_REQUEST['id']);

$sql = "UPDATE students SET first_name = ? WHERE id = ?";
$pdo->prepare($sql)->execute($data);

//Close connection
//IGNORE FOR NOW
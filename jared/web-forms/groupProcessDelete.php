<?php
//Create connection by loggin in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
	    //POST Gress
$database = new PDO($dsn);

$data = array($_REQUEST["id"]);

$database->prepare("DELETE FROM student WHERE id = ?")->execute([$data]);

//Close connection
//IGNORE FOR NOW
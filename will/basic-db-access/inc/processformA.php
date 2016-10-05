<?php
//$data = array( $_REQUEST["id"],
//			   $_REQUEST["first_name"]
//			 );
// <img src="<?= $targetFile  ?" />
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

$result = $database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);
?>
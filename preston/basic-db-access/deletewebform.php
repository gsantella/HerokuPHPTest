<?php 
//Create connection by logging in and selecting database 
$host= "ec2-23-21-234-201.compute-1.amazonaws.com";
$db= "ddf1ndt04b3tti";
$user= "fpkkqmtaywxfwm";
$pass= "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

$data = array($_REQUEST["id"]);

$stmt = $database->prepare("DELETE FROM students WHERE id=?");
$stmt->execute($data);

header('Location: http://desolate-lake-64893.herokuapp.com/preston/basic-db-access/index.php');

?>

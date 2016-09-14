<?php
//swassssss
//Create connection by logging in and selecting database 
$host= "ec2-23-21-234-201.compute-1.amazonaws.com";
$db= "ddf1ndt04b3tti";
$user= "fpkkqmtaywxfwm";
$pass= "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
$database = new PDO($dsn);

//Run a SELECT SQL STATEMENT
$result = $database->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);

//Close connection  
//Ignore for now 
?>

<!DOCTYPE html>
<html>

<head>
	<title>Basic Database Access</title>
	

</head>

<body>
	<?php print_r($result); ?>

</body>

</html>
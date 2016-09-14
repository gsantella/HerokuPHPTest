<?php
//create connection by logging in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;username=$user;password=$pass";
$database = new PDO($dsn);

//Run a SELECT SQL Statement
$result = $database->query("SELECT * FROM student;")->fetchAll(PDO::FETCH_ASSOC);

//close connection
//ignore for now
?>
<!DOCTYPE html>
<html>
<head>
	<title>basic database access</title>
</head>
<body>
	<?php echo $result; ?> 
</body>
</html>
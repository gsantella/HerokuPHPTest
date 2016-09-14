<?php
//Create connection by logging in and selecting database
$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
$db = "ddf1ndt04b3tti";
$user = "fpkkqmtaywxfwm";
$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

$dsn = "pgsql:dbname=$db;host=$host;username=$user;password=$pass";
$database = new PDO($dsn);
//Run a SELECT SQL Statement to get results
$result = $database.->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);

//Close Connection
//Ignore for now

?>
<!DOCTYPE html>
<html>

<head>
	<title>Basic Database Access</title>
</head>
<body>
	<?php echo $result; ?>
</body>

</html>
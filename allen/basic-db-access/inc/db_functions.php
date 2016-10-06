<?php
	//Create connection by loggin in and selecting database
	$host = "ec2-23-21-234-201.compute-1.amazonaws.com";
	$db = "ddf1ndt04b3tti";
	$user = "fpkkqmtaywxfwm";
	$pass = "dbEE8plG9zaS_QCcVzZeD7maqU";

	$dsn = "pgsql:dbname=$db;host=$host;user=$user;password=$pass";
			//POST Gress
	$database = new PDO($dsn);

	function insert($name) {
		$stmt= $database->prepare("INSERT INTO students (first_name) VALUES (:firstValue);");
		$stmt->bindParam(':firstValue', $name);
		$stmt->execute();
	}
	
	function deleteFrom($id) {
		$result = $database->query("DELETE FROM students WHERE id = $id");
		
		//$stmt= $database->prepare("DELETE FROM students WHERE id = :id;");
		//$stmt->bindValue(':id', $id);
		//$stmt->execute();
	}
	
	//Close connection
	//IGNORE FOR NOW

?>
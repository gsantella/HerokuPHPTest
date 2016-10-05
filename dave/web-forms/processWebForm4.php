<?php

	$data = [$_REQUEST["name"];
	
	$pdo = $database->prepare("INSERT INTO students(firstName) VALUES($data)");

?>


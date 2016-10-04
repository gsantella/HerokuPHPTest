<?php

	$firstName = $_POST['firstName'];
	
	include("../db_functions.php");
	
	insert("INSERT INTO students (first_name) VALUES ('$firstName') ");
	
<?php

	$firstName = $_POST['firstName'];
	
	include("../db_fuctions.php");
	
	insert("INSERT INTO students (first_name) VALUES ('$firstName') ");
	
	Header("Location: ../");
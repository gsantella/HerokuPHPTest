<?php
	include("database.class.php");
	$dbOb = new Database();
	$dbOb->create($_REQUEST['firstName']);\
	
	print_r($_REQUEST);
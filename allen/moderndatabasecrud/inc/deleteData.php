<?php
	include("database.class.php");
	$dbOb = new Database();
	$dbOb->delete($_REQUEST['id']);
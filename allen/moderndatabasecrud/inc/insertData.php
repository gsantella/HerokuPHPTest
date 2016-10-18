<?php
	include("database.class.php");
	$dbOb = new Database();
	$dbOb->insert($_REQUEST['firstName']);
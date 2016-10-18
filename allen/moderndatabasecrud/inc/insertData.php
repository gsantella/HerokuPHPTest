<?php
	include("database.class.php");
	$dbOb = new Database();
	$dbOb->create($_REQUEST['firstName']);
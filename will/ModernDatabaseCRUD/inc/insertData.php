<?php

//include the database class
include("inc/database.class.php");

//make a database object called $db
$db = new Database();

$db->insert($_REQUEST["firstName"]);
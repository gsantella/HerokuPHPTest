<?php

// include the database class
include("inc/database.class.php");

//make a databas object called $db
$db = new Database();

//test that the insert function works
$db->insert($_REQUEST[firstName]);

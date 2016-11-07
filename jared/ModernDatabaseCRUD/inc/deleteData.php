<?php

// include the database class
include("database.class.php");

//make a databas object called $db
$db = new Database();

//test that the delete function works
$db->delete($_REQUEST["id"]);

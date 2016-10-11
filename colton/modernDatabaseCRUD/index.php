<?php

// Include the database class
include("inc/database.class.php");

//make a database object called db
$db = new Database();

// Access the $dbhost variable in the object 
echo $db->dbhost;

<?php

// Include the database class
include("inc/database.class.php");

//make a database object called db
$db = new Database();

// Access the $dbhost variable in the object 
//echo $db->dbhost;

// Call the getDatabaseUsername function from the database object
//echo $db->getDatabaseUsername();

// Call the get all data function and print what returns

print_r($db->getAllData());

//$db->create();
//$db->retrieve();
//$db->update();
//$db->delete();
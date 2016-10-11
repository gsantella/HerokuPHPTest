<?php

// include the database class
include("inc/database.class.php");

//make a databas object called $db
$db = new database();

//access the dbHost var in the database object
//echo $db->dbHost;

//call the getDatabaseUsername function from the database object
//echo $db->getDatabaseUsername();

//call the get all data function
print_r($db->getAllData());

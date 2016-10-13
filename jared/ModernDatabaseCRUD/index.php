<?php

// include the database class
include("inc/database.class.php");

//make a databas object called $db
$db = new Database();

//access the dbHost var in the database object
//echo $db->dbHost;

//call the getDatabaseUsername function from the database object
//echo $db->getDatabaseUsername();

//call the get all data function
print_r($db->getAllData());

//test that the insert function works
$db->insert("8128-Jared");
$db->insert("8178-Jared");
$db->insert("8188-Jared");

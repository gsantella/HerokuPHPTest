<?php
//INCLUDES THE DATABASE CLASS
include("inc/database.class.php");

//MAKE A DATABASE OBJECT CALLED $db
$db = new Database();

//ACCESS THE $dbHost VARIABLE IN THE OBJECT

//echo $db->dbUserName;

//CALL getDatabaseUsername FUNCTION FROM THE DATABASE OBJECT
//echo $db->getDatabaseUsername();

//CALL the getAllData function from the database object
print_r($db->getAllData());


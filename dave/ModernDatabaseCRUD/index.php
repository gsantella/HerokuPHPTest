<?php
//INCLUDES THE DATABASE CLASS
include("inc/database.class.php");

//MAKE A DATABASE OBJECT CALLED $db
$db = new Database();

//TEST THAT THE FUNCTIONS WORKS
//$db->insert("1616161616 - Dave");
$db->remove("1616161616 - Dave");
$db->remove("1616161616 - Dave");
$db->remove("1616161616 - Dave");
//CALL the getAllData function from the database object
print_r($db->getAllData());


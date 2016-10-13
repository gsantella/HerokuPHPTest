<?php

//Include the Database class
include("inc/database.class.php");

//Make a database object called $db
$db = new Database();

// Call the getAllData function and print what returns
print_r($db->getAllData());

//Test that the insert function works!
$db->insert("43110 - Marcus");
$db->insert("43110u - Marcus");
$db->insert("43110ab13 - Marcus");

//$db->create();
//$db->retrieve();
//$db->update();
//$db->delete();
<?php

// Include the Database class
include("inc/database.class.php");

// Make a Database object called $db
$db = new Database();

// Call the getAllData function and print what returns
print_r($db->getAllData());

// Test that the insert function works!
$db->insert("3141593 - Guido");
$db->insert("314159e - Guido");
$db->insert("31415rgte3 - Guido");

//$db->create();
//$db->retrieve();
//$db->update();
//$db->delete();
<?php

// Include the Database class
include("inc/database.class.php");

// Make a Database object called $db
$db = new Database();

// Access the $dbHost variable in the Database object
//echo $db->dbHost;

// Call the getDatabaseUsername function from the Database object
//echo $db->getDatabaseUsername();

// Call the getAllData function and print what returns
print_r($db->getAllData());


$db->create("123456543235678949832 - ayy");
$db->create("123456543235678949832 - lmao");
$db->create("123456543235678949832 - suh dude");
//$db->retrieve();
//$db->update();
//$db->delete();
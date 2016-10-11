<?php

// Include the Database class
include("inc/database.class.php");

// Make a Database object called $db
$db = new Database();

// Access the $dbHost variable in the Database object
//echo $db->dbHost;

// Call the getDatabaseUsername function from the Database object
echo $db->getDatabaseUsername();

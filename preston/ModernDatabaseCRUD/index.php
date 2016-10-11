<?php 

// Include the Database class
include("inc/database.class.php");

// Make a Dtabase object called $dba_close
$db = new Database();

// Access the $dbHost variable in the Database object 
//echo $db->dbHost;

// Call the getDatabaseUsername function from the Database object 
// echo $db->getDatabaseUsername();

// Call the getAllData function and print what returns 
print_r($db->getAllData());
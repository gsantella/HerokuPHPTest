<?php 

// Include the Database class
include("inc/database.class.php");

// Make a Dtabase object called $dba_close
$db = new Database();

// Call the getAllData function and print what returns 
print_r($db->getAllData());

// Test that the insert function worked 
$db->insert(array("123456 - Preston"));
$db->insert(array("696969 - Diddy"));
$db->insert(array("232323 - Mitchell"));
<?php 

// Include the Database class
include("inc/database.class.php");

// Make a Dtabase object called $dba_close
$db = new Database();

// Access the $dbHost variable in the Database object 
echo $db->dbHost;
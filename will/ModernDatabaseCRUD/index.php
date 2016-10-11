<?php

//include the database class
include("inc/database.class.php");

//make a database object called $db
$db = new Database();

//Access the $dbHost variable in the Database object
//echo $db->dbHost;

//call the getDabaseUsername function from the Database object
//echo $db->getDatabaseUsername();

//call the getAllData function and print what returns
print_r($db->getAllData());

//$db->insert();
//$db->create();
//$db->retieve();
//$db>delete();
<?php

//include the database class
include("inc/database.class.php");

//make a database object called $db
$db = new Database();

//call the getAllData function and print what returns
print_r($db->getAllData());

//Test that the insert function works
$db->insert(array("123who456- will"));
$db->insert(array("789did123- will"));
$db->insert(array("456it789- will"));

//$db->update();
//$db->create();
//$db->retieve();
//$db>delete();
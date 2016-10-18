<?php

//include the database class
include("inc/database.class.php");

//make a database object called $db
$db = new Database();

//call the getAllData function and print what returns
print_r($db->getAllData());

//Test that the insert function works
$db->insert("allen");
$db->insert("is");
$db->insert("lonely"));
$db->insert("and");
$db->insert("need");
$db->insert("a");
$db->insert("friend :(");
//$db->update();
//$db->create();
//$db->retieve();
//$db>delete();
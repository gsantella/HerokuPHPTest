<?php

//Include the Database class
include("inc/database.class.php");

//Make a database object called $db
$db = new database();

// Call the getAllData function and print what returns
print_r($db->getAllData());

//$db->create();
//$db->retrieve();
//$db->update();
//$db->delete();
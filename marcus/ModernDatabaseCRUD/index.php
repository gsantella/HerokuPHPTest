<?php

//Include the Database class
include("inc/database.class.php");

//Make a database object called $db
$db = new database();

// Access the $dbHost variable in the Database object
echo $db->dbhost;
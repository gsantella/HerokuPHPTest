<?php

//Include the Database class
include("database.class.php");

//Make a database object called $db
$db = new Database();

//Insert the data
$db->insert($_REQUEST["firstName"]);



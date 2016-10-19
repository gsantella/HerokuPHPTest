<?php

// Include the Database class
include("database.class.php");

// Make a Database object called $db
$db = new Database();

// Insert the data
$db->delete($_REQUEST["id"]);

header('HTTP/1.1 404 Deleted');

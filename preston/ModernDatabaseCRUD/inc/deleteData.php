<?php

// Include the Database class
include("database.class.php");

// Make a Database object called $db
$db = new Database();

// Delete the data
$db->delete($_REQUEST["id"]);
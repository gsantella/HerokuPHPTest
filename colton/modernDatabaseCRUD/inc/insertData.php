<?php

// Include the Database class
include("database.class.php");

// Make a Database object called $db
$db = new Database();

// Insert the data 
$db->insert($_REQUEST[firstName]);

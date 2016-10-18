<?php

//include database class
include("inc/database.class.php");

//make database object called $db
$db = new Database();

//insert data
$db->insert($_REQUEST["firstName"]);
<?php

//include database class
include("inc/database.class.php");

//make database object called $db
$db = new Database();

//delete the data
$db->delete($_REQUEST["id"]);
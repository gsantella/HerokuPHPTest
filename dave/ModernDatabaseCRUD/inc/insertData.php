<?php
//INCLUDES THE DATABASE CLASS
include("database.class.php");

//MAKE A DATABASE OBJECT CALLED $db
$db = new Database();

//TEST THAT THE FUNCTIONS WORKS
$db->insert($_REQUEST["firstName"]);





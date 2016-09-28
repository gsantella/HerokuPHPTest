<?php

//Open file testfile.txt for appending
$file = fopen("testfile.txt", "a");

//Write POSTed variable "name" to file
fwrite($file, $_REQUEST["name"] . PHP_EOL);

//Close the file
fclose($file);
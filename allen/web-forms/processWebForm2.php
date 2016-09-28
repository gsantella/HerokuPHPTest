<?php

//open file for appending
$file = fopen("testfile.txt", "a");

//Write POSTed variable "name" to file
fwrite($file, $_REQUEST["name"]. PHP_EOL);

//Be Nice! - Close the file
fclose($file);
<?php

//open file for appending
$file = fopen("testFile.txt", "a");

//Write POSTed variable "name" to file
fwrite($_REQUEST["name"]. PHP_EOL);

//Be Nice! - Close the file
fclose($file);
<?php

//open file for appending
$file = fopen("testfile.txt", "a");

//write POSTed variable "name" to file
fwrite($_REQUEST["name"] . PHP_EOL);

//close the file
fclose($file);
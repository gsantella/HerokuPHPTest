<?php

//open file for appending
$file = fopen("testfile.txt", "a");

//write POSTed variable "name" to file
fwrite($file, $_REQUEST["name"] . PHP_EOL);
//fwrite("Hello World!")

//close the file
fclose($file);
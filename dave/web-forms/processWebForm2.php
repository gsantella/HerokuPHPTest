<?php

//OPEN FILE FOR APPENDING
$file = fopen("textfile.txt","a");

//WRITE POSTED VARIABLE "NAME" TO FILE
fwrite($_REQUEST["name"] . PHP_EOL);

//CLOSE FILE
fclose($file);


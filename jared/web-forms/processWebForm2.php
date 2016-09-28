<?php

//open file testfile.txt for pending
$file = fopen("testfile.txt", "a");

//write posted variable "name" to file
fwrite($_REQUEST["name"] . PHP_EOL);

//be nice! - vlose the file
fclose($file);
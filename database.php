<?php

$db = new SQLite3('db.sqlite');
$db->exec('CREATE TABLE files (id INTEGER PRIMARY KEY, name TEXT);');

$statement = $db->prepare('INSERT INTO files (name) VALUES (?);');
$statement->bindValue('name', 'Guido');
$statement->execute();

?>

<?php

$targetFile = basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);


?>

<img src="<?= $targetFile ?>" />
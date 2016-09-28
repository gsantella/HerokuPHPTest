<?php

$targetFile = basename($_FILES["filesToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetfile)

?>

<img src="<?=$targetfile ?>" />
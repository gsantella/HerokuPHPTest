<?php

$targetFile = basename($_FILES["filetoUpload"]["name"]);
move_uploaded_file($FILES["fileToUpload"]["tmp_name"],$targetFile);

?>

<img src="<?= $targetFile ?>" />
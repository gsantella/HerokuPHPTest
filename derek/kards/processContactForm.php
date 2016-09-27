<?php
echo "Name: " . $_REQUEST["ContactName"] . "<br />";
echo "Email: " . $_REQUEST["ContactEmail"] . "<br />";
echo "Subject: " . $_REQUEST["ContactSubject"] . "<br />";
echo "Message: " . $_REQUEST["ContactMessage"] . "<br />";
print_r($_REQUEST);
?>
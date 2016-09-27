<?php

echo "Name: " . $_REQUEST["contactName"] . "<br />";
echo "Email: " . $_REQUEST["contactEmail"] . "<br />";
echo "Subject: " . $_REQUEST["contactSubject"] . "<br />";
echo "Message: " . $_REQUEST["contactMessage"] . "<br />";


print_r($_REQUEST);
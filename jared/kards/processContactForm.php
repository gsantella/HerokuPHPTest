<?php

echo "Name: " . $_REQUEST["contactName"] . "<br />";
echo "Email: " . $_REQUEST["contactEmail"] . "<br />";
echo "Car Type: " . $_REQUEST["contactCar"] . "<br />";
echo "Phone Number: " . $_REQUEST["contactTelephone"] . "<br />";
echo "Subject: " . $_REQUEST["contactSubject"] . "<br />";
echo "Message: " . $_REQUEST["contactMessage"] . "<br />";

echo "";

print_r($_REQUEST);
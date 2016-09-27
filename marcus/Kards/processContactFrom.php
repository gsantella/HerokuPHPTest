<?php

echo "Name: " . $_REQUEST["contactName"] . "<br />"; 
echo "Email: " . $_REQUEST["contactEmail"] . "<br />"; 
echo "Subject: " . $_REQUEST["contactSubject"] . "<br />"; 
echo "Message: " . $_REQUEST["contactMessage"] . "<br />"; 

    
	<form>
		<input type="radio" name="gender" value="male" > Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other
	</form>
	<form>
		<input type="radio" name="age" value="20-25" > 20-25<br>
		<input type="radio" name="age" value="26-31"> 26-31<br>
		<input type="radio" name="age" value="32-40"> 32-40<br>
	</form>	
                 


print_r($_REQUEST)
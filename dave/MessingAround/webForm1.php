<!DOCTYPE html>

<html>
	<head>
		<title>Creating A Web Form + Processing</title>
	</head>
	
	<body>
	<h1>Create An Account</h1>
	
	<form action="email.php">
	  First name:<br>
	  <input type="text" name="firstname" value="Mickey">
	  <br>
	  Last name:<br>
	  <input type="text" name="lastname" value="Mouse">
	  <br><br>
	  <input type="submit" value="Submit">
	</form> First Name:<input type="text" id="firstName" />
	<br />
	Last Name:<input type="text" id="lastName" />
	<br />
	<input type="submit" id="submit" action="email.php"/>
	<button id="signUp">Create Account</button>
	<div id="div">
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="webform1.js"></script>
	</body>
	
</html>
<!DOCTYPE html>

<html>

<head>
	<title>Modern Web Form</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<button id="btnLoadDataWithAJAX" onclick="myFunction()">Click Me For Data</button>
	
	<div id="data">
		Data Will Be Updated Here Without A Page Reload! - YAY!
	</div>
	
	<input type="text" id="txtFirstName"></input>
	
	<button id="btnInsertDataWithAJAX" onclick="myFunction()">Add This Data</button>
	
	<div id="insertStatus">
		Result Of Insert Will Show Up Here! - YAY!
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
	
</html>
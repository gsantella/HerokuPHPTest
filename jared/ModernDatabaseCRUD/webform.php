<!DOCTYPE html>
<html>

	<head>
		<title>Modern Webform</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>

	<body>
		
		<button id="btnLoadDataWithAJAX">Click me for data!</button>
		<div id="data">
			Data will be updated without a page reload!
		</div>
		
		<input type="text" id="txtFirstName" />
		<button id="btnInsertDataWithAJAX">Add This data!</button>
		<div id="insertStatus" >
			Result of isert will show up here!
		</div>
		
		<input type="text" id="txtId" />
		<button id="btnDeleteDataWithAJAX">Remove this data!</button>
		<div id="deleteStatus">
			Result of delete will show up here!
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<Script src="js/main.js"></script>
	</body>

</html>
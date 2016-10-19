<!DOCTYPE html>
<html>

<head>
	<title>Modern Webform</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style type="text/css">
		body {
			padding: 100px;
		}
	</style>

</head>

<body>

	<p>
		<button id="btnLoadDataWithAJAX">Click Me for Data!</button>
	</p>
	
	<div id="data">
		<p>
			Data will be updated here without a page reload - yay!
		</p>
	</div>
	
	<br/><br/>
	
	<input type="text" id="txtFirstName" /><br/>
	<button id="btnInsertDataWithAJAX">Add this data!</button>
	
	<br/><br/>
	
	<div id="insertStatus">
		Result of Insert will show up here!
	</div>
		
	<br/><br/>

	<input type="text" id="txtId" /><br/>
	<button id="btnDeleteDataWithAJAX">Remove this data!</button><br/><br/>
	<div id="deleteStatus">
		Result of delete will show up here!
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	
</body>

</html>
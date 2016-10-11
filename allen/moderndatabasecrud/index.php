<?php
	//include the database class
	include("inc/database.class.php");
	
	//make a Database object called db
	$db = new Database();
?>
<!DOCTYPE html>
<html>

	<head>
	
	</head>
	
	<body>
		<?php echo $db->dbHost; ?>
	</body>
</html>
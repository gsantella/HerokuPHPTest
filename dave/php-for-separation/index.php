<?php include ("includes/functions.php");
<!DOCTYPE html>
<html>

<head>
	<title> 
		Index Page
	</title>
	<link rel="icon" type="image\png" href="favicon.png"/>
</head>

<body>

	<?php include("includes/header.php");?>
	
	<main>
		<p> This is the main content of index.php. </p>
		<p> The current day is: <?= getDayOfWeek();?> </p>
	</main>

	<?php include("includes/footer.php");?>
	
</body>



</html>
<?php include("includes/functions.php"); ?>


<!DOCTYPE html>
<html>

<head>
	<title>Index Page </title>
	<link rel="icon" type="image/png" href="index.png" />
</head>
<body>

	<?php include("includes/header.php"); ?>

	
	<main>
		<p> This is the main content for Index </p>
		<p> The current day is: <?= getDayOfWeek();?></p>
		<p> The current year is: <?= getYear();?></p>
		<p> The current time is: <?= gettime();?></p>
	<main/>
	
	<?php include("includes/footer.php"); ?>
	
	
</body>

</html>
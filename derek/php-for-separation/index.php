<?php include("includes/functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>
	<? include("includes/header.php"); ?>
	<main>
	<p>This is the Main Content for home page!</p>
	<p>The current day is: <?= getDayOfWeek(); ?></p>
	</main>
	<? include("includes/footer.php"); ?>
</body>
</html>
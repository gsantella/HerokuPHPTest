<?php include("includes/functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Index Page</title>
	<link rel="icon" type="image/png" href="favicon.png" />
</head>
<body>
	
	<?= headers; ?>
	
	<main>
		<p>This is the main content of index.php</p>
		<p>The current day is: <?= getDayOfWeek(); ?></p>
	</main>
	
	<?php include("includes/footer.php"); ?>

</body>
</html>
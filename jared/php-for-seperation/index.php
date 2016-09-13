<?php include("includes/functions.php"); ?>


<!DOCTYPE html>
<html>

	<head>
		<title>Index Page</title>
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	</head>


	<body>

		<?php include("includes/header.php"); ?>
		
		<main>
			
			<p>this is the main content of index.php</p>
			<p>the Current day is: <?= getDayOfWeek(); ?></p>
			
		</main>
		
		<?php include("includes/footer.php") ?>
		
	</body>
	
</html>
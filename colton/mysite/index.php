<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Aerial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Colton Kimberly</h1>
						<p>Security Chief &nbsp;&bull;&nbsp; Awesome &nbsp;&bull;&nbsp; Never asked for this</p>
						<p>Remote Address: <?= $_SERVER["REMOTE_ADDR"] ?></p>
						<p>Server Address: <?= $_SERVER["SERVER_ADDR"] ?></p>
						<p>Server Software: <?= $_SERVER["SERVER_SOFTWARE"] ?></p>
						<p>Request Time: <?= $_SERVER["REQUEST_TIME"] ?></p>
						<p>Using HTTPS: <?= $_SERVER["HTTPS"] ?></p>
						<p>REMOTE HOST: <?= $_SERVER["REMOTE_HOST"] ?></p>
						<p>SERVER PORT: <?= $_SERVER["SERVER_PORT"] ?></p>
						<p>REMOTE:PORT <?= $_SERVER["REMOTE_PORT"] ?></p>
						<p>PHP_SELF: <?= $_SERVER["PHP_SELF"] ?></p>
						<p> <?= $_SERVER["REMOTE_ADDR"] ?></p>
						<p>The date is <?=date("Y/m/d");?></p>
						<nav>
							<ul>
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>
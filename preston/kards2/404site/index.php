<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Quatro - Demo</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/demo.css">

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body>

	<!-- header 
   ================================================== -->
   <header>
   	<div class="row">
   		<div class="col-twelve">

   			<h1>Quatro<span>.</span></h1>

   			<p class="lead">
				Quatro is a creative pack of 404 pages. It features a clean and modern design which
				is absolutely perfect for your blog, porfolio and agency websites. Quatro is available
				in three variants: static, slideshow, and particles background and just like our other website
				templates, it is fully responsive and retina ready which means it would look awesome, crisp 
				and sharp on any device from mobile to desktop.
				
				<?= date("Y"); ?>
   			</p>

   		</div>
   	</div>   	
   </header> <!-- /header -->


  	<!-- main content
   ================================================== -->
   <main>
   	<div class="row">
   		<div class="block-1-3 block-s-1-2 block-mob-full">
   			<div class="bgrid">
   				<a href="demo1.html" title="static background">
   					<div class="image-part">
   						<img src="images/demo/demo-static.jpg" alt="">
   						<div class="overlay"></div>
   						<div class="link-icon"><i class="fa fa-plus"></i></div>
   					</div>
   					<div class="demo-title">
   						<h3>Static Background</h3>
   					</div>
   				</a>
   			</div>

   			<div class="bgrid">
   				<a href="demo2.html" title="slideshow background">
   					<div class="image-part">
   						<img src="images/demo/demo-slideshow.jpg" alt="">
   						<div class="overlay"></div>
   						<div class="link-icon"><i class="fa fa-plus"></i></div>
   					</div>
   					<div class="demo-title">
   						<h3>Slideshow Background</h3>
   					</div>
   				</a>
   			</div>

   			<div class="bgrid">
   				<a href="demo3.html" title="particles background">
   					<div class="image-part">
   						<img src="images/demo/demo-particles.jpg" alt="">
   						<div class="overlay"></div>
   						<div class="link-icon"><i class="fa fa-plus"></i></div>
   					</div>
   					<div class="demo-title">
   						<h3>Particles Background</h3>
   					</div>
   				</a>
   			</div>
   		</div>
   	</div>   
   </main> <!-- /main -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
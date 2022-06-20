<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Listing &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="asset2/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="asset2/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="asset2/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="asset2/css/superfish.css">

	<link rel="stylesheet" href="asset2/css/style.css">


	<!-- Modernizr JS -->
	<script src="asset2/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">TUGAS DATABASE</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="home.php">Home</a>
								</li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

		</div>


		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(asset2/images/cover_bg_1.jpg);">
				<div class="desc animate-box">
					<h2>Selamat Datang <?php echo $_SESSION['name']; ?></h2>
					<!-- <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
					<span><a class="btn btn-primary btn-lg" href="logout.php">LOGOUT</a></span>
				</div>
			</div>

		</div>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="asset2/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="asset2/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="asset2/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="asset2/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="asset2/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="asset2/js/hoverIntent.js"></script>
	<script src="asset2/js/superfish.js"></script>

	<!-- Main JS -->
	<script src="asset2/js/main.js"></script>

	</body>
</html>
<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>

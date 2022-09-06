<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-S7QFCL6LM9"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-S7QFCL6LM9');
	</script>

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Radin Shayanfar<?php echo empty($page_title) ? '' : ' • ' . $page_title; ?></title>
	<meta name="description" content="Radin Shayanfar personal website">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/me32x32.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" type="text/css" media="all">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="outer">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<!-- mobile header -->
	<div class="mobile-header py-2 px-3 mt-4">
		<button class="menu-icon mr-2">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<a href="index.php" class="logo"><img src="images/me70x70.png" alt="Radin Shayanfar" /></a>
		<a href="index.php" class="site-title dot ml-2">Radin Shayanfar</a>
	</div>

	<!-- header -->
	<header class="left float-left shadow-dark" id="header">
		<button type="button" class="close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="header-inner d-flex align-items-start flex-column">
			<a href="index.php"><img src="images/me70x70.png" alt="Radin Shayanfar" /></a>
			<a href="index.php" class="site-title dot mt-3">Radin Shayanfar</a>
			<span class="site-slogan">Computer Engineer</span>

            <?php
                $prefix = str_ends_with($_SERVER['SCRIPT_FILENAME'], 'index.php') ? '' : 'index.php';
            ?>
			
			<!-- navigation menu -->
			<nav>
				<ul class="vertical-menu scrollspy">
					<li><a href="<?php echo $prefix; ?>#home" class="active"><i class="icon-home"></i>Home</a></li>
					<li><a href="<?php echo $prefix; ?>#about"><i class="icon-user"></i>About</a></li>
					<li><a href="<?php echo $prefix; ?>#works"><i class="icon-grid"></i>Portfolio</a></li>
					<li><a href="<?php echo $prefix; ?>#education"><i class="icon-graduation"></i>Education</a></li>
					<li><a href="<?php echo $prefix; ?>#contact"><i class="icon-phone"></i>Contact</a></li>
				</ul>
			</nav>
			
			<!-- footer -->
			<div class="footer mt-auto">

				<!-- social icons -->
				<ul class="social-icons list-inline">
					<li class="list-inline-item"><a href="https://github.com/radinshayanfar"><i class="fab fa-github"></i></a></li>
					<li class="list-inline-item"><a href="https://twitter.com/radinshayanfar"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://instagram.com/radinshayanfar"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/radin-shayanfar-a96a9a198/"><i class="fab fa-linkedin"></i></a></li>
					<li class="list-inline-item"><a href="mailto:me@rshayanfar.ir"><i class="far fa-envelope"></i></a></li>
				</ul>

				<!-- copyright -->
				<span class="copyright">© <?php echo date("Y"); ?> Radin Shayanfar</span>
			</div>
		</div>
	</header>

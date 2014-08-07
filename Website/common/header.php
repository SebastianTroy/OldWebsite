<!doctype html>
<html lang="en">
<head>
<!-- This block optimises the rendering of the page on IE browsers -->
		<?php
		if (isset ( $_SERVER ['HTTP_USER_AGENT'] ) && (strpos ( $_SERVER ['HTTP_USER_AGENT'], 'MSIE' ) !== false))
			header ( 'X-UA-Compatible: IE=edge,chrome=1' );
			
			// This block makes sure that the $PageTitle variable is set
		if (! isset ( $PageTitle ))
			$PageTitle = "TrojanDev";
		?>
		<!-- This block deals with page details -->
<title><?php echo $PageTitle; ?>
		</title>

<meta name="description" content="text/html; charset=UTF-8">
<meta name="author" content="Sebastian Troy">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- js and css libraries used throughout the page -->
<script src="common/js/libs/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="common/js/libs/lightbox.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="common/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="common/css/fonts.css">

<!-- js and css libraries used for the header/footer -->
<link rel="stylesheet" type="text/css" href="common/css/header_footer.css">
<script src="common/js/header.js" type="text/javascript"></script>

<!-- common js and css libraries used throughought the website -->
<link rel="stylesheet" type="text/css" href="common/css/basic_style.css">
<link rel="stylesheet" type="text/css"
	href="common/css/responsive_layout.css">
<link rel="stylesheet" type="text/css" href="common/css/content_box.css">
<script src="common/js/content_box.js" type="text/javascript"></script>


<!-- Additional tags here, if any of the web pages have custom javascript or css files, they will be included here -->
		<?php
		if (function_exists ( 'customPageHeader' )) {
			customPageHeader ();
		}
		?>

<!-- Google analytics script -->
<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-43714244-1', 'proggle.net');
			ga('send', 'pageview');
		</script>
</head>

<!-- This block creates a floating/sticky menu bar at the top of the page -->
<body>
	<div id="master_container">
		<div id="header_container">
			<div class="title">TrojanDev<img class="logo" src="common/img/logo.svg"/></div>
			<div class="nav_menu">
				<a class="nav_menu_button" href="index.php">Home</a> 
				<a class="nav_menu_button" href="who-am-i.php">Who am I?</a> 
				<a class="nav_menu_button" href="projects.php">Projects</a>
				<a class="nav_menu_button" href="contact.php">Contact</a>
			</div>
			<!-- close nav_menu -->
		</div>
		<!-- close header_container -->
		<div id="page_container">
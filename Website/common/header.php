<!doctype html>
<html lang="en">
<head>
<!-- This block optimises the rendering of the page on IE browsers -->
		<?php
		if (isset ( $_SERVER ['HTTP_USER_AGENT'] ) && (strpos ( $_SERVER ['HTTP_USER_AGENT'], 'MSIE' ) !== false))
			header ( 'X-UA-Compatible: IE=edge,chrome=1' );
		
			// This block makes sure that the $PageTitle variable is set
		if (! isset ( $PageTitle ))
			$PageTitle = "TroyDev";
		?>
<!-- This block deals with page details -->
<title><?php echo $PageTitle; ?>
		</title>

<meta name="description" content="text/html; charset=UTF-8">
<meta name="author" content="Sebastian Troy">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- All css files used throughout page -->
<link rel="stylesheet" type="text/css" href="common/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="common/css/header_footer.css">
<link rel="stylesheet" type="text/css" href="common/css/basic_style.css">
<link rel="stylesheet" type="text/css" href="common/css/responsive_layout.css">
<link rel="stylesheet" type="text/css" href="common/css/content_box.css">

<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Vollkorn'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Quattrocento'>

<!-- If any of the web pages have custom css files, they will be included here -->
<?php
if (function_exists ( 'customCSSHeader' )) {
	customCSSHeader ();
}
?>

<!-- All javascript files used throughout page -->
<script type="text/javascript" src="common/js/libs/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="common/js/libs/jquery.cookie-1.4.1.min.js"></script>
<script type="text/javascript" src="common/js/libs/lightbox.min.js"></script>
<script type="text/javascript" src="common/js/header.js"></script>
<script type="text/javascript" src="common/js/content_box.js"></script>

<!-- If any of the web pages have custom javascript files, they will be included here -->
<?php
if (function_exists ( 'customJavascriptHeader' )) {
	customJavascriptHeader ();
}
?>

<!-- Google analytics script -->
<script type="text/javascript" src="common/js/libs/analytics.min.js"></script>
</head>

<!-- This block creates a floating/sticky menu bar at the top of the page -->
<body>
	<div id="master_container">
		<div id="header_container">
			<div class="title">
				Troy<div class="logo">
					<img src="common/img/logo.svg"
						onerror="this.onerror = null; this.src=&quot;common/img/logo_small.png&quot;" />
				</div>Dev
			</div>
			<div class="nav_menu">
				<a class="nav_menu_button home" href="index.php">Home</a><a class="nav_menu_button about"
					href="who-am-i.php">About me</a><a class="nav_menu_button projects" href="projects.php">Projects</a><a
					class="nav_menu_button contact" href="contact.php">Contact</a>
			</div>
			<!-- close nav_menu -->
		</div>
		<!-- close header_container -->
		<div id="page_container">
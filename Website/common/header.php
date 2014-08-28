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

<meta charset="UTF-8"/>
<meta name="author" content="Sebastian Troy"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<!-- All css files used throughout page -->
<link rel="stylesheet" type="text/css" href="http://troydev.proggle.net/common/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="http://troydev.proggle.net/common/css/header_footer.css">
<link rel="stylesheet" type="text/css" href="http://troydev.proggle.net/common/css/basic_style.css">
<link rel="stylesheet" type="text/css" href="http://troydev.proggle.net/common/css/responsive_layout.css">
<link rel="stylesheet" type="text/css" href="http://troydev.proggle.net/common/css/content_box.css">

<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Vollkorn'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Quattrocento'>

<!-- If any of the web pages have custom css files, they will be included here -->
<?php
if (function_exists ( 'customCSSHeader' )) {
	customCSSHeader ();
}
?>

<!-- All javascript files used throughout page -->
<script type="text/javascript" src="http://troydev.proggle.net/common/js/libs/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://troydev.proggle.net/common/js/libs/jquery.cookie-1.4.1.min.js"></script>
<script type="text/javascript" src="http://troydev.proggle.net/common/js/libs/lightbox.min.js"></script>
<script type="text/javascript" src="http://troydev.proggle.net/common/js/header.js"></script>
<script type="text/javascript" src="http://troydev.proggle.net/common/js/content_box.js"></script>

<!-- If any of the web pages have custom javascript files, they will be included here -->
<?php
if (function_exists ( 'customJavascriptHeader' )) {
	customJavascriptHeader ();
}
?>
<!-- Google analytics script -->
<script>var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-53924810-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();</script>
</head>

<body>
	<div id="master_container">
		<!-- Sticky header (Title minimised when user scrolls down, leaving only menu) -->
		<div id="header_container">
			<div class="title">
				Troy<img class="logo" src="http://troydev.proggle.net/common/img/logo.svg"
					onerror="this.onerror = null; this.src=&quot;common/img/logo_small.png&quot;" />Dev
			</div>
			<!-- Menu -->
			<div class="nav_menu">
				<a class="nav_menu_button home" href="http://troydev.proggle.net/index.php">Home</a><a class="nav_menu_button about"
					href="http://troydev.proggle.net/about-me.php">About me</a><a class="nav_menu_button projects"
					href="http://troydev.proggle.net/projects.php">Projects</a><a class="nav_menu_button contact"
					href="http://troydev.proggle.net/contact.php">Contact</a>
			</div>
			<!-- close nav_menu -->
		</div>
		<!-- close header_container -->
		<div id="page_container">
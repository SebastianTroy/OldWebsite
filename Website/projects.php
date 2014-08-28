<?php
$PageTitle = "Games and models by Sebastian Troy";
function customCSSHeader() {
	?>
<!-- include css here, e.g. <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> -->
<?php
}
function customJavascriptHeader() {
	?>
<!-- include javascript here, e.g. <script type="text/javascript" src="js/script.js"></script> -->
<?php
}

include_once ('common/header.php');

include_once ('projects/overview.html');

include_once ('common/footer.php');
?>
<?php
$PageTitle = "Hex Nations, a unitless, hexagon based, 4x strategy game";
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

include_once ('projects/hex-nations/hex-nations.html');

include_once ('common/footer.php');
?>
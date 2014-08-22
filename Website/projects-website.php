<?php
$PageTitle = "The making of this website";
function customCSSHeader() {
	?>
<!-- include css here, e.g. <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> -->
<?php
}
function customJavascriptHeader() {
	?>
<!-- include css here, e.g. <link rel="stylesheet" type="text/css" href="css/stylesheet.css"> -->
<?php
}

include_once ('common/header.php');

include_once ('projects/website/website.html');

include_once ('common/footer.php');
?>
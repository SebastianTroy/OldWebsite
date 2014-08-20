<?php
$PageTitle = "How to run .jar files on Windows, MacOS and Linux";
function customCSSHeader() {
	?>
<link rel="stylesheet" type="text/css" href="java-help/css/terminals.css">
<?php
}
function customJavascriptHeader() {
	?>
<script type="text/javascript" src="java-help/js/os_detection.js"></script>
<?php
}

include_once ('common/header.php');

include_once ('java-help/java-help.html');

include_once ('common/footer.php');
?>
<?php

$PageTitle = "Help running Java projects";

function customPageHeader(){
?>
<link rel="stylesheet" type="text/css" href="java-help/css/terminals.css">
<script type="text/javascript" src="java-help/os_detection.js"></script>
<?php }

	include_once ('common/header.php');

	include_once ('java-help/java-help.html');

	include_once ('common/footer.php');
?>
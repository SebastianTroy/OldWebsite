<?php

$PageTitle = "Projects";

function customPageHeader(){
?>
<link rel="stylesheet" type="text/css" href="css/basic_style.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/content.css">
<?php }

	include_once ('common/header.php');

	include_once ('webpages/projects.html');

	include_once ('common/footer.php');
?>
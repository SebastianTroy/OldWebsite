<?php

$PageTitle = "Home";

function customPageHeader(){
?>
<link rel="stylesheet" type="text/css" href="css/basic_style.css">
<?php }

	include_once ('common/header.php');

	include_once ('html/homepage.html');

	include_once ('common/footer.php');
?>
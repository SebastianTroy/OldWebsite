<?php
$PageTitle = "Contact";
function customCSSHeader() {
	?>
<link rel="stylesheet" type="text/css" href="contact/css/forms.css">
<?php
}
function customJavascriptHeader() {
	?>
<script type="text/javascript" src="contact/js/mail.js"></script>
<?php
}

include_once ('common/header.php');

include_once ('contact/contact.html');

include_once ('common/footer.php');
?>
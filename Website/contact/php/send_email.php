<?php
$from = $_POST ["from"];
$subject = $_POST ["subject"];
$message = $_POST ["message"];
// message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap ( $message, 70 );
// send email
mail ( "sebastiantroy@btinternet.com", $subject, $message, "From: $from\n" );
?>
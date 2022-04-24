<?php
// Contact form values
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", $email);

$message = $msg;

$subject = "$name contacted you from karlstobbe.com";

$headers = "From: $email";

mail("karlstobbe@gmail.com", $subject, $message, $headers);

header("Location: contact.html");
?>
<?php
$to = 'isdesigneverything@gmail.com';
$name = @trim(stripslashes($_POST['name']));
$from = @trim(stripslashes($_POST['email']));
$message = @trim(stripslashes($_POST['message']));


$headers   = '';
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
$headers .= "From: {$name} <{$from}>" . "\r\n";
$headers .= "Reply-To: <{$from}>" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

mail($to, $message, $headers);
header("Location:https://everything-design.000webhostapp.com/contact.html");

exit;
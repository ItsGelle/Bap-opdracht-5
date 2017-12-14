<?php

$to = '25158@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'Your mail has been send correctly!';
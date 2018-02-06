<?php

// make mailvariables
$to = '24742@ma-web.nl';
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$headers = 'From: ' . $_POST['from'];

//send mail
mail($to, $subject, $message, $headers);

//confirm
echo 'Your mail has been sent, thank you!';
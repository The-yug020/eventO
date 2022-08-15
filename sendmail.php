<?php

$to_email = "daveyug2002@gmail.com";
$subject = "eventO (Event Management System)";
$body = "2 Days left for your Python Webinar...";
$headers = "From: evento.remibder@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>
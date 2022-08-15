<?php
$to_email = "daveyug2002@gmail.com";
$subject = "Python Webinar";
$message = "144 Days left for event...";
$headers = 'From: daveyug2002@gmail.com';
if(mail($to_email,$subject,$message,$headers)){
  echo "Email Successfully sent to $to_email";
}
?>
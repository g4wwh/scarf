<?php
header("location:form_regthanks");


  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = "Name: " . $name . "\n";
  $message .= "Email: " . "mailto:" . $email . "\n";
  $message .= "Subject: " . $subject . "\n"; 
  $message .= "Message:\n" . $_POST['message'];
  $to = "philip.pavelin@stfc.ac.uk";
#  $to = "phil@pavelin.com";
#  $to = "scarf@hpc-support.rl.ac.uk";
  $mail_headers = "From: $email \r\n";

  $mail_headers .= "Reply-To: $email \r\n";

  mail($to,$subject,$message,$mail_headers);


?>

<?php
header("location:form_regthanks");


  $name = $_POST['name'];
  $email = $_POST['email'];
  $affiliation = $_POST['affiliation'];
  $collaborator = $_POST['collaborator'];
  $sshkey = $_POST['sshkey'];
  $ibis = $_POST['ibis'];
  $magnacarta = $_POST['magnacarta'];
  $derevolutionibus = $_POST['derevolutionibus'];
  $octopus = $_POST['octopus'];
  $scddev = $_POST['scddev'];

  if ($ibis == "on") {
    $ibis = "IBIS";
  }
  if ($magnacarta == "on") {
    $magnacarta = "MagnaCarta";
  }
  if ($derevolutionibus == "on") {
    $derevolutionibus = "DeRevolutionIbus";
  }
  if ($octopus == "on") {
    $octopus = "Octopus";
  }
  if ($scddev == "on") {
    $scddev = "SCD Developer";
  }
  
  $subject = "SCARF User Registration - " . $name;
  $message = "Name: " . $name . "\n";
  $message .= "Business Email: " . "mailto:" . $email . "\n";
  $message .= "Affiliation: " . $affiliation . "\n";
  $message .= "STFC or Diamond Collaborator: " . $collaborator . "\n";
  $message .= "SSH Public Key: " . $sshkey . "\n";
  $message .= "Access to subsections of SCARF: " . $ibis . " " . $magnacarta . " " . $derevolutionibus . " " . $octopus . " " . $scddev . "\n";
  $message .= "Access to restricted applications: " . $matlab . " " . $idl . " " . $crystal . " " . $castep . " " . $dl_poly . " " . $epoch . " " . $gaussian . " " . $atsas . " " . $mathematica . "\n";
#  $to = "philip.pavelin@stfc.ac.uk";
  $to = "phil@pavelin.com";
#  $to = "scarf@hpc-support.rl.ac.uk";
  $mail_headers = "From: $email \r\n";

  $mail_headers .= "Reply-To: $email \r\n";

  mail($to,$subject,$message,$mail_headers);


?>

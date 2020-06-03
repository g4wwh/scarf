<?php
header("location:form_regthanks.html");


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
  $matlab = $_POST['matlab'];
  $idl = $_POST['idl'];
  $crystal = $_POST['crystal'];
  $castep = $_POST['castep'];
  $dl_poly = $_POST['dl_poly'];
  $epoch = $_POST['epoch'];
  $gaussian = $_POST['gaussian'];
  $atsas = $_POST['atsas'];
  $mathematica = $_POST['mathematica'];

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
  if ($matlab == "on") {
    $matlab = "Matlab";
  }
  if ($idl == "on") {
    $idl = "IDL";
  }
  if ($crystal == "on") {
    $crystal = "CRYSTAL";
  }
  if ($castep == "on") {
    $castep = "CASTEP";
  }
  if ($dl_poly == "on") {
    $dl_poly = "DL_POLY";
  }
  if ($epoch == "on") {
    $epoch = "EPOCH";
  }
  if ($gaussian == "on") {
    $gaussian = "GAUSSIAN";
  }
  if ($atsas == "on") {
    $atsas = "ATSAS and BIOSAXS pipeline";
  }
  if ($mathematica == "on") {
    $mathematica = "Mathematica";
  }

  
  $subject = "SCARF User Registration - " . $name;
  $message = "Name: " . $name . "\n";
  $message .= "Business Email: " . "mailto:" . $email . "\n";
  $message .= "Affiliation: " . $affiliation . "\n";
  $message .= "STFC or Diamond Collaborator: " . $collaborator . "\n";
  $message .= "\nSSH Public Key: \n" . $sshkey . "\n";
  $message .= "\nAccess to subsections of SCARF: \n" . $ibis . " " . $magnacarta . " " . $derevolutionibus . " " . $octopus . " " . $scddev . "\n";
  $message .= "\nAccess to restricted applications:\n" . $matlab . " " . $idl . " " . $crystal . " " . $castep . " " . $dl_poly . " " . $epoch . " " . $gaussian . " " . $atsas . " " . $mathematica . "\n";
  $to = "philip.pavelin@stfc.ac.uk";
#  $to = "phil@pavelin.com";
#  $to = "scarf@hpc-support.rl.ac.uk";
  $mail_headers = "From: $email \r\n";

  $mail_headers .= "Reply-To: $email \r\n";

  mail($to,$subject,$message,$mail_headers);


?>

<?php
  require_once 'PHPMailer.php';
  require_once 'Exception.php';
  require_once 'SMTP.php';

  $err = array();

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();  // the mailer is set to use SMTP
$mail->Host = "smtp.zoho.com";  // specify main and backup server
$mail->SMTPAuth = true; // SMTP authentication is turned on
$mail->Username = "support@blackstonegamedevelopment.in";  // SMTP username
$mail->Password = "Bh@vin123"; // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->From = "support@blackstonegamedevelopment.in";
$mail->FromName = "BGD";	 // name is optional
$mail->AddAddress('blackston404@gmail.com');

$mail->WordWrap = 50;  // set word wrap to 50 characters
$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "Welcome to Scriptverse";
$mail->Body    = "Hello Guest, <br/><br/> Welome to <b>ScriptVerse</b>. <br/></br/>Thank you,<br/>Scriptverse Team";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

  $result=$mail->Send();
  echo $result;
?>

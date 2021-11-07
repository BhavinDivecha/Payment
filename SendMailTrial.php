<?php


require 'phpmailer/class.phpmailer.php';
  $mail = new PHPMailer();
  $mail->SMTPDebug = 3;
    
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  
  $mail->Host = 'smtpout.secureserver.net';  //Sets the SMTP hosts
  $mail->Port = '80';        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'blackston404@gmail.com';     //Sets SMTP username
  $mail->Password = 'bhbh123123';     //Sets SMTP password
  $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = 'blackston404@gmail.com';     //Sets the From email address for the message
  $mail->FromName = 'Bhavin';    //Sets the From name of the message
  $mail->AddAddress('bhavin.divecha09@gmail.com', 'Name');//Adds a "To" address
  $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML    
  $mail->Subject = 'Hello';    //Set s the Subject of the message
  $mail->Body = 'Trial Message';    //An HTML or plain text message body
  $result=$mail->Send();
  echo $result;
?>

<?php
	include "mail_function.php";
	$email='Bhavin.divecha09@gmail.com';//$_POST["email"];
	$otp=
	$message=' Your OTP for verify Your Email in BMGL : '.$otp;
	$mail_status=sendOTP($email,$otp);
if($mail_status==1){
	echo "Succ";
}
else{
	echo "Error";
}	
?>
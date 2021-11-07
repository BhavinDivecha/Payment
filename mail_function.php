<?php	
	function sendOTP($email,$otp) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	
		$message_body = " Your OTP for Ludo Classic Pro is : ".$otp;
		$mail = new PHPMailer();
		$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->Username = "3idevelopers2021@gmail.com";
	$mail->Password = "rachsbd123";
                                $mail->SetFrom('3idevelopers2021@gmail.com','Bhavin Divecha');
                                $mail->AddAddress($email);
                                $mail->Subject= "OTP ".$otp;
                                $mail->MsgHTML($message_body);
                                $result=$mail->Send();
                                if(!$result) {
                                    echo "Mailer Error: " . $mail->ErrorInfo;
                                }else {
                                    	return $result;  
                                } 		
	}
?>

<?php	
	function sendOTP($email,$otp) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	
		$message_body = " Your OTP for Ludo Classic Pro is : ".$otp;
		$mail = new PHPMailer();
	   //$mail->AddReplyTo('tutorialspoint2016@gmail.com','Technical Suneja');
                                $mail->SetFrom('tutorialspoint2016@gmail.com','Technical Suneja');
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
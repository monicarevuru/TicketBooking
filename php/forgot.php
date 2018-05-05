<?php
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
include("config.php");
if ( $conn ) {
	/*echo "connection succesfull";*/
	//echo conne;
}
	$email = $_GET['email'];
	$sql = "SELECT * FROM `BookTickz`.`user` WHERE `user_email` = '$email'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$pass = $row['user_password'];
	if ( mysqli_num_rows( $result ) > 0 )
	{
	    	$mail = new PHPMailer;
		$mail->setFrom('booktickz@gmail.com');
      		$mail->addAddress($email);
    		$mail->Subject = 'Reset Password for BookTickZ';
    		$mail->Body = 'The following is your BookTickZ Password: '.$pass.' ';
    		$mail->IsSMTP();
    		$mail->SMTPSecure = 'ssl';
    		$mail->Host = 'ssl://smtp.gmail.com';
    		$mail->SMTPAuth = true;
    		$mail->Port = 465;
//Set your existing gmail address as user name
    		$mail->Username = 'booktickz@gmail.com';
//Set the password of your gmail address here
    		$mail->Password = 'amma12345678';
    		if(!$mail->send())
		{
			echo 'Email is not sent.';
			echo 'Email error: ' . $mail->ErrorInfo;
    		}
		else
		{
		  	echo 'Check Your Email for the Password ';
		}

  	}
  	else
  		echo "no user found";
?>

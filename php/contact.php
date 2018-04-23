<?php
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
include("config.php");
$cname = $_GET['contact_form_name'];
$cemail = $_GET['contact_form_email'];
$cmsg = $_GET['contact_form_message'];
$cphone = $_GET['contact_form_phone'];


$emaillen = strlen( $cemail );
$i=$emaillen;
$char = substr( $cemail, $emaillen-10, 10 );
if(strcmp($char,'@gmail.com')!=0&&strcmp($char,'@yahoo.com')!=0)
{
  echo "Invalid mail";
}
$mail = new PHPMailer;
$mail->setFrom($cemail);
$mail->addAddress('booktickz@gmail.com');
$mail->Subject = 'Query from a Customer: Name - '.$cname.'';
$mail->Body = 'The Message from the Customer is as Follows : '.$cmsg.' ';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
//$mail->Username = $cemail;
//$mail->Password = 'papai1234';
if(!$mail->send()) 
{
	echo 'Email is not sent.';
	echo 'Email error: ' . $mail->ErrorInfo;
}
else
	echo 'Email Sent';

?>

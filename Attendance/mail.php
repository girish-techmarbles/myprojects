<?php
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('girish2468@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username ='girish.techmarbles@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'ghjkghjk';
if(!$mail->send()) {
	echo 'Email is not sent.';
	echo 'Email error: ' . $mail->ErrorInfo;
} else {
	echo 'Email has been sent.';
}
?>
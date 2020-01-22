<?php
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('girish.techmarbles@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->addAttachment('lateemployee.txt');
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'girish.techmarbles@gmail.com';
$mail->Password = 'ghjkghjk';
if(!$mail->send()) {
	echo 'Email is not sent.';
	echo 'Email error: ' . $mail->ErrorInfo;
} else {
	echo 'Email has been sent.';
}
?>
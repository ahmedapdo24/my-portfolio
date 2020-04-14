<?php
header('Content-Type: text/html; charset=utf-8');
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'ahmedapdo910@yahoo.com';          // SMTP username
$mail->Password = '0822381754'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('ahmedapdo098@gmail.com', 'Torf');
$mail->addReplyTo('ahmedapdo910@yahoo.com', 'Torf');
$mail->addAddress('ahmedapdo910@yahoo.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->Header= 'Content-Type: text/html; charset=utf-8';
$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>الاسم بالكامل : </h3>'. $_POST['name'] ;
$bodyContent .= '<h3>البريد الالكتروني : </h3>'. $_POST['email'] ;
$bodyContent .= '<h3>العنوان : </h3>' . $_POST['address'];
$bodyContent .= '<h2>المحتوي : </h2>' . $_POST['message'];

$mail->Subject = 'Peter Subject';
$mail->Body    = $bodyContent;

	if(!$mail->send()) {
	    return   '0';
	} else {
	    return  '1';
	}
?>

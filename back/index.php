<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth =true;
$mail->SMTPSecure='ssl';
$mail->Host ='smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username ='sovannquaglieri@gmail.com';
$mail->Password = 'sossovan123';
$mail->setFrom('no-reply@azeaze.com');
$mail->Subject='Hello World';
$mail->Body='A test';
$mail->addAddress('sovannquaglieri@gmail.com');
$mail->Send();


$conf['show_php_errors'] = E_ALL & ~E_DEPRECATED;

?>
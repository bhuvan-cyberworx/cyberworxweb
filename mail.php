<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email_id = $_POST['email_id'];
$mobile_number = $_POST['mobile_number'];



//PHPMailer Object
$mail = new PHPMailer;


//From email address and name
$mail->From = $email_id;
$mail->FromName = "Lykan";

//To address and name
$mail->addAddress("bhuvan@cyberworx.in", "Bhuvan Singh");


//Address to which recipient will reply
$mail->addReplyTo($email_id, "Reply");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);
$message = 'Email Id is: '+$email_id+ '<br> Mobile number is:'+$mobile_number+ '.';

$mail->Subject = 'New Email from Lykan Popup';
$mail->Body =  $message;
// $mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "success";
}


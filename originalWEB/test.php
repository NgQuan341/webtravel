<?php
use PHPMailer\PHPMailer\PHPMailer;
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
require "PHPMailer/Exception.php"; 
$mail = new PHPMailer();
$subject = "Email Verification Code";
$body = "Your verification code is $code";

//SMTP Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "dinhkhakl01@gmail.com"; //enter you email address
$mail->Password = 'Luly041101'; //enter you email password
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//Email Settings
$mail->isHTML(true);
$mail->setFrom($email, "HKT Queen Hotel");
$mail->addAddress($email); //enter you email address
$mail->Subject = ($subject);
$mail->Body = $body;

if ($mail->send()) {
    $info = "We've sent a verification code to your email - $email";
    $_SESSION['info'] = $info;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location: user-otp.php');
    exit();
}
?>
<?php



$name = $_POST["contact-name"] ?? "";
$email = $_POST["contact-email"] ?? "";
$subject = $_POST["contact-subject"] ?? "";
$message = $_POST["message"] ?? "";

if (!empty($name) || !empty($email) || !empty($subject) || !empty($message));


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require "vendor/autoload.php";
$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "osama.asmi04@gmail.com";
$mail->Password = "jikn otbi ofbw uxnz";




$mail->setFrom($email, $name);
$mail->addAddress("osama.asmi04@gmail.com", "Osama");


$mail->Subject = $subject;
$mail->Body = $message;
$mail->send();

header("Location: email-send.php");

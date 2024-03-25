<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function sendMail($to, $subject, $contents) {

    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();

        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'huymamicoi@gmail.com';// SMTP username
        $mail->Password = 'dnhf xhpa niox wmod'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TCP port to connect to

        $mail->setFrom('xshop@gmail.com', "XSHOP");
        $mail->addAddress("$to");
        $mail->addReplyTo('not-reply@xshop.com', 'Information');

        $mail->isHTML(true);
        $mail->Subject = mb_encode_mimeheader($subject, "UTF-8", "B");
        $mail->Body = "$contents";
        $mail->send();
    }
    catch (Exception $e) {
        echo $e -> getMessage();
    }

}



?>
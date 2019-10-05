<?php
/**
 * Created by PhpStorm.
 * User: MY PC
 * Date: 8/16/2019
 * Time: 11:54 PM
 */
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dir= dirname('C:\New folder\htdocs\team\vendor\autoload.php');
$dir.='\autoload.php';

require $dir;
$mail = new PHPMailer(true);





    try {
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'oyebamijitobi@gmail.com';                     // SMTP username
        $mail->Password   = 'gblcauvijrdacnxm';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('oyebamijitobi@gmail.com', 'MY Name');
        $mail->addAddress('oyebamijitobi@gmail.com', 'Joe User');     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = $link;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
//        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $error[]='Email not sent. Please try again.';
    }

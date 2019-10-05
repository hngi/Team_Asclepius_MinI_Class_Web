<?php
/**
 * Created by PhpStorm.
 * User: MY PC
 * Date: 10/4/2019
 * Time: 11:49 AM
 */

require 'config/database.php';
$db=new DB();
$db = $db->get_connection();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dir= dirname('C:\New folder\htdocs\team\vendor\autoload.php');
$dir.='\autoload.php';

require $dir;
$mail = new PHPMailer(true);
$errors = array();
$message = '';


//check if email exists
if(isset($_POST['reset-btn'])){
   if(!empty($_POST['email'])){
       $email=$_POST['email'];
       $sql = "SELECT * FROM users WHERE email = '$email' ";
       $query = $db->query($sql);
       $UserDetails = mysqli_fetch_assoc($query);
       $count = mysqli_num_rows($query);
//$dir= dirname('C:\New folder\htdocs\team\vendor\autoload.php');
//$dir.='\autoload.php';
//echo $dir;

       if ($count >= 1) {

           $rand=rand();
           $send='localhost/team/changepassword.php?email='.$email.'&password='.$rand;
           $link="<a target='_blank' href='.$send.'> click here to reset password </a>";
//                    require '../maill.php';
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
//                      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
               $error[]='Email not sent. Please try again.';
               echo $mail->ErrorInfo;
           }
           $message='A one time password has been sent to your account';
           $sql = "UPDATE users SET `resetPass`='$rand' WHERE `email`='$email'";
           $db->query($sql);


       } else {
           $errors[] = "Email Does Not Exist";
       }
   }
   else{
       echo 'na here he come';
       $errors[]="Email cannot be empty";
   }
}

if (isset($_GET['password'])){
    $pass=$_GET['password'];
    $email=$_GET['email'];
    $sql = "SELECT * FROM users WHERE resetPass  = '$pass' ";
    $query = $this->db->query($sql);
    $UserDetails = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);

    if($count>=1){

    }
}




if(isset($_POST['reset'])){
    $password=$_POST['password'];
    $c_password=$_POST['confirm_password'];
    if($password==$c_password){
        $reset_password=$_SESSION['r_pass'];
        $email=$_SESSION['r_email'];
        $sql = "SELECT * FROM users WHERE resetPass  = '$reset_password' ";
        $query = $db->query($sql);
        $UserDetails = mysqli_fetch_assoc($query);
        $count = mysqli_num_rows($query);
        if($count>=1){
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $hash = md5(rand(0, 1000));
            $sql = "UPDATE users SET `password`='$hash' WHERE `email`='$email'";
            $result=$db->query($sql);

            $rand=rand();
            $sql = "UPDATE users SET `resetPass`='$rand' WHERE `email`='$email'";
            $db->query($sql);
            $_SESSION=[];
            $message='password updated succesfully';
            echo $message;
        }
        else{
            $errors[]='Link has been used or dosent exist. Kindly request for another.';
            echo $errors[0];
        }
    }
    else{
        $errors[]='password dont match';
        echo $errors[0];
    }
}

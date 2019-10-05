<?php

require "config/database.php";
require "mailController.php";

$first_name = '';
$email = '';
$mgs = '';
$errors = [];

/* mail for forget password */
if (isset($_POST["reset-btn"])) {

  $emailto =  $_POST["email"];

  $code = uniqid(true);
  $query = mysqli_query($db, "INSERT INTO resetpassword (code, email) VALUES('$code', '$emailto')");

  if (!$query) {
    exit("error");
  }
  $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
  $subject = 'Your Password Reset Link';
  $body = "<h1>You requested a reset password link</h1> 
                        <i>Click <a href='$url'> this link </a> to reset your password";
  $_SESSION['message'] = 'Reset Password link has been sent to your email';
  SendMail($emailto, $body, $subject,$url);
  header('location: login.php');
  exit();
}


/* For create_new_password */

if (isset($_POST['newPassword-btn'])) {
  
  $code = $_GET["code"];

  $getEmailQuery = mysqli_query($db, "SELECT email from resetpassword WHERE code='$code'");

  if (mysqli_num_rows($getEmailQuery) == 0) {
    $errors['error roll'] ="Can't find page";
  }

  if (isset($_POST['new_password'])) {

    $pw = mysqli_real_escape_string($db, $_POST['new_password']);
    $pw = mysqli_real_escape_string($db, $_POST['confirm_new_password']);
    // $pw = md5[$pw];
    $pw = password_hash($pw, PASSWORD_BCRYPT);

    $row = mysqli_fetch_array($getEmailQuery);
    $email = $row["email"];

    $query = mysqli_query($db, "UPDATE users SET password='$pw' WHERE email='$email' ");

    //to delete old code and input new code

    if ($query) {
      $query = mysqli_query($db, "DELETE FROM resetpassword WHERE code='$code' ");
      $_SESSION['message'] ="Password Updated!";
    } else {
      $errors['error password update'] = " Error Updating Password!";
      exit();
    }
  }

}

?>

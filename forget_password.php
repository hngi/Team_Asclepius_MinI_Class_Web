<?php
require 'controllers/user.php';

$user = new User;

if (isset($_POST['recover_password'])) {
  $email = $_POST["email"];
  $code = uniqid(true);
  if ($user->mailer($email,$code)) {
    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
    $subject = 'Your Password Reset Link';
    $body = "<h1>You requested a reset password link</h1> 
                          <i>Click <a href='$url'> this link </a> to reset your password";
    SendMail($email, $body, $subject, $url);
    $_SESSION['mail-mgs'] = 'Reset Password link has been sent to your email';
   header("location: login.php");
    exit();
  }
}


?>

<!DOCTYPE html>
<div lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/newdashboard.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <title>Document</title>
  </head>

  <body>

    <!-- <div class="logo">
      <img src="./images/Logo.png" alt="logo">
    </div> -->


    <div class="register_login-content" id="login-form">
      <form action="" method="POST">
        <h2 class="form-title">Recover Your Password</h2>

        <div id="errorForResetPassword">

        </div>


        <div>
          <label for="">Email</label>
          <input type="email" name="email" id="email" class="text-input" required>
        </div>

        <div>
          <button type="submit" class="btn btn-big" name="recover_password">Recover Password</button>
        </div>
        <p>Return back to <a href="login.php" class="text-danger">Login</a></p>

      </form>
    </div>

    <script src="js/main.js"></script>
  </body>

</div>
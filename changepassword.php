<?php
//require 'controllers/user.php';
session_start();
$_SESSION['r_pass']=$_GET['password'];
$_SESSION['r_email']=$_GET['email'];
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
    <title>Forgot Password</title>
  </head>

  <body>

    <!-- <div class="logo">
      <img src="./images/Logo.png" alt="logo">
    </div> -->

 <!-- enter email to forget password form  -->
    <div class="register_login-content" id="login-form">
      <form action="test.php" method="POST" id="resetPassword" onsubmit="return resetPassword();">
        <h2 class="form-title">Recover Your Password</h2>

        <div id="errorForResetPassword">

        </div> 

        <div class="form-box">

          <input type="password" name="password" class="form-control pop" placeholder="Password" >

        </div>

        <div class="form-box">

          <input type="password" name="confirm_password" class="form-control pop" placeholder="Confirm Password" >

        </div>

        <div>
          <button type="submit" class="btn btn-big" name="reset">Reset</button>
        </div>
        <p>Return back to <a href="login.php" class="text-danger">Login</a></p>

      </form>
    </div>

    <script src="js/main.js"></script>
  </body>

</div>
<?php
require 'controllers/user.php';
$user = new User;
if (isset($_GET["code"])) {
  
  if (isset($_POST['reset_password'])) {

    $code = $_GET["code"];
    $newPassword =  $_POST['new_password'];

    $message = $user->createNewPassword($newPassword, $code);
    $_SESSION['mail-mgs'] = "Password Updated!";
    echo '<script> location.replace("login.php"); </script>';
    exit();
  }
}else{
  exit("Can't find page");
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
    <div class="alert alert-sucess">
      <img src="images/Image from iOS.png" alt="" srcset="" widht="100" height="70">
    </div>
    <h4 class="little-title text-center text-info">ASCLEPIUS CLASSROOM MEMBERSHIP AREA</h4>

    <div class="register_login-content" id="login-form">
      <form method="POST" id="myform" onsubmit="return CreateNewPassword();">

        <h2 class="form-title">Create New Password</h2>
        <div id="errorCreateNewPassword">

        </div>



        <div>
          <label for="">Password</label>
          <input type="password" name="new_password" id="new_password" class="text-input">
        </div>
        <div>
          <label for="">Confirm Password</label>
          <input type="password" name="confirm_password" id="confirm_new_password" class="text-input">
        </div>

        <div>
          <button type="submit" class="btn btn-big" name="reset_password">Create New Password</button>
        </div>
        <p>Return back to <a href="login.php" class="text-danger">Login</a></p>

      </form>
    </div>

    <script src="js/main.js"></script>
  </body>

</div>
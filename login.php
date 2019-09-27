<?php
require 'controllers/user.php';
$user =  new User;


if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  $message = $user->UserLogin($email, $password);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/newdashboard.css">
  <link rel="stylesheet" href="css/form.css">
  <title>Document</title>
</head>

<body>

  <div class="register_login-content" id="login-form">
    <form action="" method="POST">
      <h2 class="form-title">Get Active</h2>

      <div id="error_message">
        <?php

        if (!empty($message)) {

          foreach ($message as $mess) {

            echo "<div class='alert alert-danger'>$mess</div>";
          }
        }


        ?>
      </div>


      <div class="group">
        <label for="">Email</label>
        <input type="email" name="email" id="email" class="text-input">
        <span><img src="fonts/Vector.png" class="icon" alt=""></span>
      </div>
      <div class="group">
        <label for="">Password</label>
        <input type="password" name="password" id="password" class="text-input">
        <span><img src="fonts/Vector-1.png" class="icon" alt=""></span>

      </div>

      <div>
        <button type="submit" class="btn btn-big" name="login">Login</button>
      </div>
      <p>Don't have an account? <a href="register.php" class="text-danger">Register</a></p>
      <a href="forget_password.php" class="text-danger text-center">Forget Password</a>
    </form>
  </div>

  <script src="js/main.js"></script>
</body>

</html>
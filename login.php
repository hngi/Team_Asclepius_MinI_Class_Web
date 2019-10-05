<?php

require 'controllers/user.php';
include('includes/header.php');

$user =  new User;


if(isset($_SESSION['register_message'])){

  $reg_message = $_SESSION['register_message'];

}


if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password =  $_POST['password'];


  $message = $user->UserLogin($email, $password);
}

?>

  <div class="alert alert-sucess">
      <img src="images/Image from iOS.png" alt="" srcset="" widht="100" height="70">
  </div>
  <h4 class="little-title text-center text-info">ASCLEPIUS CLASSROOM LOGIN AREA</h4>

  <div class="register_login-content" id="login-form">
    <form action="login.php" method="POST">
      <h2 class="form-title">Get Active</h2>
      <h5 class="little-title text-center">Welcome back Student or Teacher Access your dashboard </h5>

      <div id="error_message">
        <?php
        if(!empty($reg_message)){

          echo "<div class='alert alert-success'>$reg_message</div>";

          unset($_SESSION['register_message']);
        }

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
      <p>Forgot Password? <a class="text-danger" href="forget_password.php">Recover password</a></p>
      <p>Don't have an account? <a href="register.php" class="text-danger">Register</a></p>
      
    </form>
  </div>

  <script src="js/main.js"></script>
</body>

</html>
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
      
  </div>

  <div class="register_login-content" id="login-form">
    <form action="login.php" method="POST">
      <h2 class="form-title">Get Active</h2>

      <div id="error_message">
       
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
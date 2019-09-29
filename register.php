<?php
require 'controllers/user.php';
include('includes/header.php');
$user =  new User;

if (isset($_POST['register'])) {

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $password = $_POST['password'];
  $confirm_password =  $_POST['confirm_password'];


  $message = $user->CreateUser($fullname, $email, $role, $password, $confirm_password);

}

?>

<body>

  <!-- <div class="logo">
      <img src="./images/Logo.png" alt="logo">
    </div> -->


  <div class="register_login-content">
    <form action="" method="POST" onsubmit="return validate();">
      <h2 class="form-title">Register</h2>

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
        <label for="">Fullname</label>
        <input type="text" name="fullname" id="full_name" class="text-input">
        <span><img src="fonts/Vector-2.png" class="icon" alt=""></span>
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
      <div class="group">
        <label for="">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" class="text-input">
        <span><img src="fonts/Vector-1.png" class="icon" alt=""></span>

      </div>
      <div>
        <label for="">Role</label>
        <select name="role" id="role" class="text-input ">
          <option value="">Select</option>
          <option value="lecturer">lecturer</option>
          <option value="student">student</option>
        </select>
      </div>
      <div>
        <button type="submit" class="btn btn-big" name="register">Register</button>
      </div>
      <p>Aready Have An Account? <a href="login.php" class="text-danger">Sign in</a></p>

    </form>
  </div>

  <script src="js/main.js"></script>
</body>

</html>
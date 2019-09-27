<?php
require 'controllers/user.php';
$user =  new User;
if (isset($_POST['register'])) {
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
}

//<<<<<<< HEAD
///* To test registeration, create variables $fullname, $email, $role, $password, $confirm_password with the same details
//you would like to use to register just under this comment, save and and refresh the page, then go to login page and follow the instructions */
//$message = $user->CreateUser($fullname, $email, $role, $password, $confirm_password)
//=======
//  $message = $user->CreateUser($fullname, $email, $role, $password, $confirm_password);
//}
//
//
//>>>>>>> 2ac6f5bb48ab0c5b39a1fbc911276e77f4403d67
//
///* To test registeration, create variables $fullname, $email, $role, $password, $confirm_password with the same details
//you would like to use to register just under this comment, save and and refresh the page, then go to login page and follow the instructions */
//
//
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
  <!-- <link rel="stylesheet" href="css/main.css"> -->
  <title>Document</title>
</head>

<body>

  <!-- <div class="logo">
      <img src="./images/Logo.png" alt="logo">
    </div> -->


  <div class="register_login-content">
    <form action="" method="POST" onsubmit="return validate();">
      <h2 class="form-title">Register</h2>

      <div id="error_message">

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
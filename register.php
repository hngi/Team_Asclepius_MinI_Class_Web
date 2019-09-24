<?php
require 'controllers/user.php';
$user =  new User;

if (isset($_POST['register'])) {
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $message = $user->CreateUser($fullname, $email, $role, $password, $confirm_password);
}



/* To test registeration, create variables $fullname, $email, $role, $password, $confirm_password with the same details 
you would like to use to register just under this comment, save and and refresh the page, then go to login page and follow the instructions */


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>
<header>
    <div class="logo">
      <img src="./images/Logo.png" alt="logo">
    </div>
  </header>
<p class="lead text-center signup text-white">Sign Up</p>
<form action="#" class="form-box" method="post">
<input type="text" name="fullname" class="input-form" id="" placeholder="Fullname">
  <input type="text" name="email"class="input-form" id="" placeholder="email">
  <input type="password" name="password" class="input-form" id="" placeholder="Password">
  <input type="text" name="confirm_password" class="input-form" id="" placeholder="confirm Password">
      <select id="inputState" class="form-control" name="role">
        <option selected>Choose role</option>
        <option value="lecturer">Lecturer</option>
        <option value="student">Student</option>
      </select>
    
  <input type="submit" value="Submit" name="register" class="btn">
<h3 class="text-center text-white">Already have an account ? <a class=" link" href="login.php">Login</a></h3>
  
</form>

  <script src="js/main.js"></script>
</body>

</html>
<?php
require 'controllers/user.php';

$user =  new User;

/* To test registeration, create variables $fullname, $email, $role, $password, $confirm_password with the same details 
you would like to use to register just under this comment, save and and refresh the page, then go to login page and follow the instructions */




// $message = $user->CreateUser($fullname, $email, $role, $password, $confirm_password)



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
 
  <p class="lead text-center signup">Sign Up</p>
<form action="#" class="form-box">
  <input type="text" name="fname" class="input-form" id="" placeholder="Fullname">
  <input type="text" name="email"class="input-form" id="" placeholder="email">
  <input type="password" name="password" class="input-form" id="" placeholder="Password">
  <input type="text" name="c_password" class="input-form" id="" placeholder="confirm Password">
      <select id="inputState" class="form-control">
        <option selected>Choose role</option>
        <option value="lecturer">Lecturer</option>
        <option value="student">Student</option>
      </select>
    
  <input type="submit" value="Submit" class="btn btn-success">
<h3 class="text-center text-white">Already have an account ? <a class=" link" href="login.php">Login</a></h3>
  
</form>


  <script src="js/main.js"></script>
</body>

</html>
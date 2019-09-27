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
  <form action="" class="form-box" method="post" onsubmit="return validate();">
    <div id="error_message">
    <div style="width: 50%; margin: 0 auto;">
        <?php
            
            if(!empty($message)){

              foreach($message as $mess){

                echo "<div class='alert alert-danger'>$mess</div>";
              }

            }
          ?>
    </div>

    </div>
    <div class="icon-pos">
      <input type="text" name="fullname" class="input-form"  placeholder="Fullname" id="full_name"//    </div>
      <span> <img src="fonts/Vector-2.png" class="icon" alt="icon-user"></span>
   <div class="icon-pos">
      <input type="text" name="email" class="input-form" placeholder="Email" id="email">
      <span> <img src="fonts/Vector.png" class="icon" alt="icon-user"></span>

    </div>
    <div class="icon-pos">
      <input type="password" name="password" class="input-form" id="password" placeholder="Password" id="password">
      <span> <img src="fonts/Vector-1.png" class="icon" alt="icon-user"></span>

    </div>

    <div class="icon-pos">
      <input type="password" name="confirm_password" class="input-form" id="confirm_password" placeholder="Confirm Password" id="confirm_password">
      <span> <img src="fonts/Vector-1.png" class="icon" alt="icon-user"></span>

   </div>

    <select id="inputState" class="form-control sel" name="role" >
      <option selected>Choose role</option>
      <option value="lecturer">Lecturer</option>
      <option value="student">Student</option>
    </select>

    <input type="submit" value="Submit" name="register" class="btn">
    <h3 class="text-center text-white small-text">Already have an account ? <a class=" link" href="login.php">Login</a></h3>

  </form>

  <script src="js/main.js"></script>
</body>

</html>
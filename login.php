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
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="logo">
      <img src="./images/Logo.png" alt="logo">
    </div>
  </header>

  <main>
    <h1>Get Active</h1>

    <div style="width: 50%; margin: 0 auto;">
        <?php
            
            if(!empty($message)){

              foreach($message as $mess){

                echo "<div class='alert alert-danger'>$mess</div>";
              }


            }


          ?>

    </div>
    
       
    
    <form class="login-form" method="post">
      <div class="user-name">
        <div class="icon">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <input type="text" name="email" placeholder="Email">
      </div>

      <div class="password">
        <div class="icon">
          <i class="fa fa-briefcase" aria-hidden="true"></i>
        </div>
        <input type="password" name="password" placeholder="Password">
      </div>

      <input type="submit" value="LOGIN" name="login" class="btn">
      <h3 class="text-center text-white">Don't have an account ? <a class="link" href="register.php">Register</a></h3>
      <a href="forget_password.php" class="text-danger">Forget Password?</a>
      <div class="line"></div>

    </form>
  </main>

  <script src="js/main.js"></script>
</body>

</html>
<?php
require 'controllers/user.php';


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
    <h1>Recover Password</h1>
    <form class="login-form" method="post" onsubmit="return resetPassword();">
      <div id="errorForResetPassword">

      </div>
      <div class="user-name">
        <div class="icon">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <input type="text" name="email" placeholder="Email" id="email">
      </div>

      <input type="submit" value="Recover" name="recover_password" class="btn">
      <h3 class="text-center text-white">Return back to <a class="link" href="login.php">login</a></h3>

      <div class="line"></div>

    </form>
  </main>

  <script src="js/main.js"></script>
</body>

</html>
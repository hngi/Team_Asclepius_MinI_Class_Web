<?php
  require 'controllers/user.php';

  $user =  new User;

  /*----to test login, create variables email and password with the same email 
  and password you used to register just under this comment---*/
 

  $message = $user->UserLogin($email,$password);

  var_dump($message);


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


  <script src="js/main.js"></script>
</body>

</html>
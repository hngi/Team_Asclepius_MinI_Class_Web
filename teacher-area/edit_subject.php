<?php

require '../controllers/LecturerController.php';

$lecturer = new Lecturer;

/* test variables----> uncomment these variables, fill them in with your own values and 
  navigate to the page to test. Make sure your database is imported and connected.

  $course_code = 'CEG313';
  $course_title = 'strength of materials';
  $course_description = 'dEscribing the stregnth of different materials in civil eng.';
  $dept_code = 'CEG';
  $faculty_code = 'ENG';
  $id_number = '123456';
  $credit_unit = 2;


  $message = $lecturer->CreateCourse($course_code, $course_title, $course_description,$credit_unit ,$dept_code, $faculty_code, $id_number)


  */





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/2d058dd44a.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins|Candal|Lora" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/newdashboard.css">
  <link rel="stylesheet" href="../css/teachdashboard.css">
  <link rel="stylesheet" href="../css/form2.css">
  <title>Document</title>
</head>

<body>
  <div id="overhead">
    <h3>TEACHER'S DASHBOARD</h3>
  </div>
  <?php require_once "header.php"; ?>

  <div class="register_login-content">
    <form action="" method="POST">
      <h2 class="form-title">Edit Subject</h2>

      <div id="error_message">

      </div>

      <div>
        <label for="">Subject Name</label>
        <input type="text" name="subject_name" id="subject_name" class="text-input">
      </div>
      <div>
        <label for="">Subject description</label>
        <input type="text" name="subject_description" id="Subject_description" class="text-input">
      </div>
      <div>
        <label for="">Subject Content</label>
        <textarea name="" id="" cols="30" rows="5" class="text-input"></textarea>
      </div>


      <div>
        <button type="submit" class="btn btn-big " id="btn-success" name="update_subject">Update Subject</button>
        <a type="button" class="btn btn-big btn-light" href="subject.php">Cancle</a>
      </div>


    </form>
  </div>

  <!-- FOOTER -->
  <div class="footer text-center">
    <div class="footer-middle">
      &copy; Asclepius.com | Designed by Asclepius Team
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../js/menu-bar.js"></script>
  <script src="/js/newdashboard.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>
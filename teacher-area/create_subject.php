<?php

require '../controllers/LecturerController.php';

$lecturer = new Lecturer;


if(isset($_POST['create_course'])){

  $course_code = $_POST['course_code'];
  $course_title = $_POST['course_title'];
  $course_description = $_POST['course_description'];
  $dept_code = $_POST['department'];
  $faculty_code = $_POST['faculty'];
  $credit_unit = $_POST['credit_unit'];

  $id_number = 'stu268174';

  $message = $lecturer->CreateCourse($course_code, $course_title, $course_description,$credit_unit ,$dept_code, $faculty_code, $id_number);

}

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
  <?php require_once "header.php"; ?>

  <div class="register_login-content">
    <form action="create_subject.php" method="POST">
      <h2 class="form-title">Create Course</h2>

      <div id="error_message">
        <?php
            if(!empty($message)){

              echo '<div class="alert alert-info">'.$message.'</div>';

            }

        ?>
      </div>

      <div>
        <label for="">Course Title</label>
        <input type="text" name="course_title" id="course_title" class="text-input">
      </div>
      <div>
        <label for="">Course Code</label>
        <input type="text" name="course_code" id="course_code" class="text-input">
      </div>
      <div>
        <label for="">Course description</label>
        <textarea name="course_description" id="course_description" cols="30" rows="5" class="text-input"></textarea>
      </div>
      <div>
        <label for="">Credit Units</label>
        <input type="number" name="credit_unit" id="credit_unit" class="text-input" min=1>
      </div>
      <div>
        <label for="">Department</label>
        <input type="text" name="department" id="department" class="text-input">
      </div>
      <div>
        <label for="">Faculty</label>
        <input type="text" name="faculty" id="faculty" class="text-input">
      </div>
      <div>
        <input type="submit" class="btn btn-big " id="btn-success" name="create_course" value="Create Course">
        <a  type="button" class="btn btn-big btn-light" href="subject.php">Cancel</a>
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
  <script src="js/newdashboard.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
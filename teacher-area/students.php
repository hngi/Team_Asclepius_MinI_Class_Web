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
  <title>Document</title>
</head>

<body>
  <div id="overhead">
    <h3>TEACHER'S DASHBOARD</h3>
  </div>
  <?php require_once "header.php"; ?>

  <div class="container" id="container-teacherArea">
    <h3 id="button-link">Student List</h3>
    <table class="table table-bordered table-responsive-lg table-condensed table-hover">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Ayeni kehinde</td>
          <td>kenny4all40@gmail.com</td>
          <td>
            <a href="">more</a>
            <a href="" class="text-success">Approved</a>
            <a href="" class="text-danger">Delete</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>Team lead</td>
          <td>kenny4all40@gmail.com</td>
          <td>
            <a href="">more</a>
            <a href="" class="text-warning">Not-Approved</a>
            <a href="" class="text-danger">Delete</a>
          </td>
        </tr>
        <tr>
        <tr>
          <td>3</td>
          <td>Folasade</td>
          <td>kenny4all40@gmail.com</td>
          <td>
            <a href="" class="">more</a>
            <a href="" class="text-warning">Not-Approved</a>
            <a href="" class="text-danger">Delete</a>
          </td>
        </tr>
        <tr>
        <tr>
          <td>4</td>
          <td>Code Noob</td>
          <td>kenny4all40@gmail.com</td>
          <td>
            <a href="">more</a>
            <a href="" class="text-warning">Not-Approved</a>
            <a href="" class="text-danger">Delete</a>
          </td>
        </tr>
        <tr>
      </tbody>
    </table>
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
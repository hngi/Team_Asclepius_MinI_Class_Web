<?php

require '../controllers/LecturerController.php';

$lecturer = new Lecturer;
$id_number = $_SESSION['id_number'];

$courses = $lecturer->SelectCourses($id_number);





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

  <div class="container">
    <a href="create_subject.php" value="" class="btn btn-success mb-4 " id="button-link">Add Subject</a>
    <table class="table table-bordered table-responsive-lg table-condensed table-hover">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>Course title</th>
          <th>Course description</th>
          <th>Course Code</th>
          <th>Action</th>
        </tr>
      </thead>
     
      <tbody>
      <?php
        while($course = mysqli_fetch_assoc($courses)) :


      ?>
        <tr>
          <td><?= $course['course_id']; ?></td>
          <td><?= $course['course_title']; ?></td>
          <td>
            <?= $course['course_description'] ?>

          </td>
          <td>
            <?= $course['course_code'] ?>

          </td>
          <td>
            <a href="edit_subject.php">Edit</a>
            <a href="" class="text-danger">Delete</a>
          </td>
        </tr>
        <?php
          endwhile;

        ?>
        
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
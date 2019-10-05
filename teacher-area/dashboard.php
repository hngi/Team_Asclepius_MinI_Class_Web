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
  <?php require_once "header.php"; ?>

  <div class="container card" id="container-teacherArea">
    <div class="jumbotron text-center">
        <p>Welcome to the Teacher Area</p>
    
    </div>
   <!-- <a href="../dashboard.php" target="_blank" class="text-danger visite-site">Visite Site</a>

    <div class="col-md-12">
      <div class="row">

        <div class="col-md-4">
          <div class="card border-success mb-3">
            <div class="card-header">All Student</div>
            <div class="card-body text-danger">
              <h5 class="card-title">Danger card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-danger mb-3">
            <div class="card-header">All Assignmentt</div>
            <div class="card-body text-success">
              <h5 class="card-title">Danger card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-primary mb-3">
            <div class="card-header">All Subject</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-warning mb-3">
            <div class="card-header">Other things</div>
            <div class="card-body text-muted">
              <h5 class="card-title">Danger card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>


    </div>-->
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
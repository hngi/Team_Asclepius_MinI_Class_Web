<?php

require_once('../controllers/StudentController.php');


$student = new Student;

$user_id = $_SESSION['User'];

$user =$student->GetUser($user_id);

    $id_number = $user['id_number'];
    $faculty = $user['faculty_code'];
    $notes = $student->ShowCourseNotes($id_number);
    $assignments = $student->ShowCourseAssignments($id_number);
    $courses = $student->ShowRegdCourses($id_number);


    if(isset($_POST['course_reg'])){

      $courses_array = [];

      $course1 = $_POST['course1'];
      $course2 = $_POST['course2'];
      $course3 = $_POST['course3'];
      $course4 = $_POST['course4'];
      $course5 = $_POST['course5'];

      array_push($courses_array, $course1, $course2, $course3, $course4, $course5 );



      $mess = $student->RegisterCourses($courses_array, $id_number);
    }
    

   

   

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


  <!-- <link rel="stylesheet" href="css/main.css"> -->

  <title>Document</title>
</head>

<body>
 
  <header>
    <div class="logo">
      <h1 class="logo-text"><span>Asclepius</span>Class</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Class Note</a></li>
      <li><a href="submit_assignment.php">Submit Assignment</a></li>
      <li><a href="#">Subject</a></li>

      <li>
        <a href="#">
          <img src="images/lecturer.jpg" alt="">
          <!-- <i class="fa fa-user"></i> -->
          <?= $user['fullname'];?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>

        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="../logout.php" class="logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>

  <div class="container-fluid" id="page-wrapper">
    <div class="main" id="a">
      <div class="main-first">
        <div id="c">
          <img src="images/graduant.png" alt="">
        </div>
        <div id="d">
          <h6>Hi, <?= $user['fullname'];?> </h6>
          <h4>Welcome to Asclepius Class</h4>
          <p>All about classroom activities would be updated here</p>
        </div>
      </div>
      <div class="main-second">
        <div id="grandChild">
          <div class="title">
            <h4>Class Notes</h4>
            <a href="#">See all</a>
          </div>
          
          <div id="p-div">
          <?php

            foreach($notes as $note){

              echo '<div id="col">
              <p>'.
                 $note["course_code"].'</p>
              <div>
                <h6>'.$note["note_title"].'</h6>
                <p>Biology</p>
                <p>Date Added : '.$note["created_at"].'</p>
              </div>
            </div>
            <div>
              <a href="#" class="btn btn-primary pull-right">Download</a>
            </div>
            <hr>';
            }

          ?>  
          </div>
        </div>

        <div id="grandChild">
          <div class="title">
            <h4>Assignments</h4>
            <a href="#">See all</a>
          </div>
          <div id="p-div">
            <?php
              foreach($assignments as $assignment){

                echo '<div class="assignment">
                <div id="g" class="color-blue"> </div>
                <div class="assignment-child" id="h">
                  <div>
                    <p>'.$assignment['course_code'].'</p>
                  </div>
                  <div>
                    <p>'.$assignment['assignment_title'].'</p>
                  </div>
  
                </div>
  
              </div>
              <div>
                <a href="#" class="btn btn-primary pull-right">Download</a>
                <a href="#" class="btn btn-success float-right">Submit</a>
              </div>
              <hr>';

              }



            ?>
          </div>

        </div>
      </div>

    </div>
    <div class="side" id="b">

      <div id="caleandar">
        <h3>Registered Courses</h3>
        <div class="list-group">
          <ul class="list-group">
            <?php
              foreach($courses as $cos){

                echo ' <a href="course.php?course_code='.$cos.'"><li class="list-group-item">'.$cos.'</li></a>';
              }


            ?>
          </ul>

        </div>
        
      </div>

      <div id="caleandar">
        <hr>
        <h3>Register Courses</h3>
        <form action="dashboard.php" method="POST">
          <div id="error-message">
              <?php
                if(!empty($mess)){

                  echo '<div class="alert alert-info">'.$mess.'</div>';
                }

              ?>
              
            </div> 
          <div class="form-group">
            <label for="course1">First Course</label>
            <select name="course1" id="course1" class="form-control">
              <option value=""></option>
              <?php
                $fac_courses = $student->SelectCourses($faculty);
                  while($fac_course = mysqli_fetch_assoc($fac_courses)):
              ?>
                <option  value="<?=$fac_course['course_code']; ?>"><?=$fac_course['course_title']; ?></option>

              <?php
                  endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course2">Second Course</label>
            <select name="course2" id="course2" class="form-control">
              <option value=""></option>
              <?php
                $fac_courses = $student->SelectCourses($faculty);
                  while($fac_course = mysqli_fetch_assoc($fac_courses)):
              ?>
                <option  value="<?=$fac_course['course_code']; ?>"><?=$fac_course['course_title']; ?></option>

              <?php
                  endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course3">Third Course</label>
            <select name="course3" id="course3" class="form-control">
              <option value=""></option>
              <?php
                $fac_courses = $student->SelectCourses($faculty);
                  while($fac_course = mysqli_fetch_assoc($fac_courses)):
              ?>
                <option  value="<?=$fac_course['course_code']; ?>"><?=$fac_course['course_title']; ?></option>

              <?php
                  endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course4">Fourth Course</label>
            <select name="course4" id="course4" class="form-control">
              <option value=""></option>
              <?php
                $fac_courses = $student->SelectCourses($faculty);
                  while($fac_course = mysqli_fetch_assoc($fac_courses)):
              ?>
                <option  value="<?=$fac_course['course_code']; ?>"><?=$fac_course['course_title']; ?></option>

              <?php
                  endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course5">Fifth Course</label>
            <select name="course5" id="course5" class="form-control">
              <option value=""></option>
              <?php
                $fac_courses = $student->SelectCourses($faculty);
                  while($fac_course = mysqli_fetch_assoc($fac_courses)):
              ?>
                <option  value="<?=$fac_course['course_code']; ?>"><?=$fac_course['course_title']; ?></option>

              <?php
                  endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div>
            <input type="submit" class="btn btn-primary" value="Register" name="course_reg">
          </div> 
        </form>
        
      </div>
      

    </div>
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
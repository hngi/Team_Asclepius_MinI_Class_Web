<?php

require_once('controllers/StudentController.php');


$student = new Student;

$user_id = $_SESSION['User'];

$user =$student->GetUser($user_id);


   /* Testing displaying courses on student dashboard. Take note, only courses for the student's department
   will be shown on his dashboard. 
   

    $dept_code = 'CEG';

    $courses = $student->ShowCourses($dept_code);

    var_dump($courses); */
    
    


    /* Testing displaying registered courses only. please write all your front-end code under the php tags. Only backend guys
    that understand what is happening here can try to test it. Or ask me for explanation.

    $id_number = 268174;

    $RegdCourses = $student->ShowRegdCourses($id_number);



    $courses_offered = $RegdCourses['courses'];
    $courses_offered = json_decode($courses_offered);

    foreach($courses_offered as $course){

        echo $course. ' ';
    }

    */




    /*Tested displaying notes. Works Perfect. Only notes for registered courses will be displayed. */
    

    //$id_number = 'stu268174';

    $id_number = $user['id_number'];
    $notes = $student->ShowCourseNotes($id_number);

    $assignments = $student->ShowCourseAssignments($id_number);

   

   

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/2d058dd44a.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins|Candal|Lora" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/newdashboard.css">


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
      <li><a href="#">Assignment</a></li>
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
          <li><a href="logout.php" class="logout">Logout</a></li>
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
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora earum, qui expedita enim quaerat id non, iusto distinctio sequi minus atque illo. At eum non fugiat voluptatibus cum delectus unde.
      </div>
      <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora earum, qui expedita enim quaerat id non, iusto distinctio sequi minus atque illo. At eum non fugiat voluptatibus cum delectus unde.
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
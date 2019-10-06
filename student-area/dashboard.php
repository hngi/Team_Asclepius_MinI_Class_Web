<?php

require('../controllers/StudentController.php');
include('includes/header.php');
include('includes/nav.php');


$student = new Student;

$user_id = $_SESSION['User'];

$user = $student->GetUser($user_id);

$id_number = $_SESSION['id_number'];

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


  

  <div class="container-fluid" id="page-wrapper">
       
      
    <div class="main" id="a">
        <?php
            if(empty($user['courses'])){
                
                echo '<div class="alert alert-danger text-center">Please <a href="student_update.php">update faculty and department</a>, then register courses.</div>';
                
            }
          
          ?>
        
      <div class="main-first">
          <div>
         
      </div>
        <div id="c">
          <img src="../images/graduant.png" alt="">
        </div>
        <div id="d">
          <h6>Hi, <?= $user['fullname']; ?> </h6>
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
            

            foreach ($notes as $note) {

              echo '<div id="col">
              <p>' .
                $note["course_code"] . '</p>
              <div>
                <h6>' . $note["note_title"] . '</h6>
                <p>Biology</p>
                <p>Date Added : ' . $note["created_at"] . '</p>
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
            foreach ($assignments as $assignment) {

              echo '<div class="assignment">
                <div id="g" class="color-blue"> </div>
                <div class="assignment-child" id="h">
                  <div>
                    <p>' . $assignment['course_code'] . '</p>
                  </div>
                  <div>
                    <p>' . $assignment['assignment_title'] . '</p>
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
            
            if (!empty($courses)) {
               foreach ($courses as $cos) {

                echo ' <a href="course.php?course_code=' . $cos . '"><li class="list-group-item">' . $cos . '</li></a>';
              }
            }else{
              echo "<p class='text-warning'>NO course registered at the moment</p>";
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
            <select name="course1" id="course1" class="form-control" required>
              <option value=""></option>
              <?php
              $fac_courses = $student->SelectCourses($faculty);
              while ($fac_course = mysqli_fetch_assoc($fac_courses)) :
                ?>
                <option value="<?= $fac_course['course_code']; ?>"><?= $fac_course['course_title']; ?></option>

              <?php
              endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course2">Second Course</label>
            <select name="course2" id="course2" class="form-control" required>
              <option value=""></option>
              <?php
              $fac_courses = $student->SelectCourses($faculty);
              while ($fac_course = mysqli_fetch_assoc($fac_courses)) :
                ?>
                <option value="<?= $fac_course['course_code']; ?>"><?= $fac_course['course_title']; ?></option>

              <?php
              endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course3">Third Course</label>
            <select name="course3" id="course3" class="form-control" required>
              <option value=""></option>
              <?php
              $fac_courses = $student->SelectCourses($faculty);
              while ($fac_course = mysqli_fetch_assoc($fac_courses)) :
                ?>
                <option value="<?= $fac_course['course_code']; ?>"><?= $fac_course['course_title']; ?></option>

              <?php
              endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course4">Fourth Course</label>
            <select name="course4" id="course4" class="form-control" required>
              <option value=""></option>
              <?php
              $fac_courses = $student->SelectCourses($faculty);
              while ($fac_course = mysqli_fetch_assoc($fac_courses)) :
                ?>
                <option value="<?= $fac_course['course_code']; ?>"><?= $fac_course['course_title']; ?></option>

              <?php
              endwhile;
              ?>
              <?php


              ?>
            </select>

          </div>
          <div class="form-group">
            <label for="course5">Fifth Course</label>
            <select name="course5" id="course5" class="form-control" required>
              <option value=""></option>
              <?php
              $fac_courses = $student->SelectCourses($faculty);
              while ($fac_course = mysqli_fetch_assoc($fac_courses)) :
                ?>
                <option value="<?= $fac_course['course_code']; ?>"><?= $fac_course['course_title']; ?></option>

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

            
          </div>

        </form>

      </div>


    </div>
  </div>

  <?php
    include('includes/footer.php');
  
  ?>


</body>

</html>
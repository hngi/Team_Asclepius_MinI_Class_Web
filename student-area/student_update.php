<?php

require '../controllers/StudentController.php';
include('includes/header.php');
include('includes/nav.php');

$student = new Student;

$departments = $student->SelectDepartments();
$faculties = $student->SelectFaculties();


if(isset($_POST['submit_assignment'])){

  $assignment_title = $_POST['assignment_title'];
  $course_code = $_POST['course_code'];
  $id_number = $_SESSION['id_number'];

}

if(isset($_POST['update_details'])){
    
    $faculty_code = $_POST['faculty_code'];
    $dept_code = $_POST['dept_code'];
    $id_number = $_SESSION['id_number'];
    
   $update_message = $student->UpdateStudent($faculty_code, $dept_code,$id_number);
}

?>

  <div class="register_login-content">
    <form action="student_update.php" method="POST">
      <h2 class="form-title">Update Details</h2>

      <div class="form-group">
         <label>Department</label>
        <select name='dept_code' class="form-control">
            <option></option>
            <?php
            
                while($dept = mysqli_fetch_assoc($departments)) :
            
            ?>
            
            <option value='<?= $dept['dept_code'];?>'><?=$dept['department_name']; ?></option>
            
            <?php
                 endwhile;
            
            ?>
        </select>
      </div>
      <div class="form-group">
          <label>Faculty</label>
        <select name='faculty_code' class="form-control">
            <option></option>
            <?php while($fac = mysqli_fetch_assoc($faculties)) :
            
            ?>
            
            <option value='<?= $fac['faculty_code'];?>'><?=$fac['faculty_name']; ?></option>
            
            <?php
                 endwhile;
            
            ?>
        </select>
        
      </div>
      <div>
      <input type="submit" class="btn btn-big " id="btn-success" name="update_details" value="Update">
        <a type="button" class="btn btn-big btn-light" href="dashboard.php">Cancel</a>
      </div>


    </form>
  </div>

  <?php
  
    include('includes/footer.php');
  ?>
</body>

</html>
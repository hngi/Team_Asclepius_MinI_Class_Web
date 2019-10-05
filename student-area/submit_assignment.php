<?php

require '../controllers/StudentController.php';
include('includes/header.php');
include('includes/nav.php');

$student = new Student;


if(isset($_POST['submit_assignment'])){

  $assignment_title = $_POST['assignment_title'];
  $course_code = $_POST['course_code'];
  $id_number = '123456';

  if(!empty($_FILES)){

    $errors = array();
    $name =$_FILES['submission_file']['name'];
    $nameArray = explode('.', $name);
    $fileName = $nameArray[0];
    $fileExt = $nameArray[1];
    $allowed = array('pdf','doc','docx');
    $target_dir = "../uploads/assignments/submissions/";
    $target_file = $target_dir . basename($_FILES["submission_file"]["name"]);    
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
      $error[] = "Sorry, file already exists.";        
    
    }
    // Check file size
    if ($_FILES["submission_file"]["size"] > 500000) {
      $error[] = "Sorry, your file is too large. Upload files less than 5mb.";
       
    }
    // Allow certain file formats
    if(!in_array($fileExt, $allowed)){
      $error[] = "The file must be either pdf, doc or docx.";
      
    }
    if (!empty($errors)) {

      foreach($errors as $error){

          $wrong = $error;

      }

  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["submission_file"]["tmp_name"], $target_file)) { 
          
          $upload_message = $student->SubmitAssignment($course_code, $assignment_title,$target_file,$id_number);

      } else {
          $upload_message = "Sorry, there was an error uploading your file.";
      }
  }
}
  

}

?>

  <div class="register_login-content">
    <form action="submit_assignment.php" method="POST" enctype="multipart/form-data">
      <h2 class="form-title">Submit Assignment</h2>

      <div id="">
      <?php
      if (!empty($messagesub)) {

          echo '<div class="alert alert-info">' . $messagesub . '</div>';
        }
            if(!empty($errors)){

              foreach($errors as $error){

                echo '<div class="alert alert-info">'.$error.'</div>';
              }

              

            }

        ?>

      </div>

      <div>
        <label for="">Assignment Title</label>
        <input type="text" name="assignment_title" id="assignment_title" class="text-input" required>
      </div>
      <div>
        <label for="">Course</label>
        <input type="text" name="course_code" id="course_code" class="text-input" required>
      </div>
      <div>
        <label for="">Assignment</label>
       <input type="file" name="submission_file" required>
      </div>
      <div>
      <input type="submit" class="btn btn-big " id="btn-success" name="submit_assignment" value="Submit Assignment">
        <a type="button" class="btn btn-big btn-light" href="dashboard.php">Cancel</a>
      </div>


    </form>
  </div>

  <?php
  
    include('includes/footer.php');
  ?>
</body>

</html>
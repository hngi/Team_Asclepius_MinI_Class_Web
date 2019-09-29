<?php

require '../controllers/LecturerController.php';

$lecturer = new Lecturer;


if (isset($_POST['create_assignment'])) {

  $assignment_title = $_POST['assignment_title'];
  $course_code = $_POST['course_code'];
  $id_number = '123456';

  if (!empty($_FILES)) {

    $errors = array();
    $name = $_FILES['assignment_file']['name'];
    $nameArray = explode('.', $name);
    $fileName = $nameArray[0];
    $fileExt = $nameArray[1];
    $allowed = array('pdf', 'doc', 'docx');
    $target_dir = "../uploads/assignments/";
    $target_file = $target_dir . basename($_FILES["assignment_file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
      $error[] = "Sorry, file already exists.";
    }
    // Check file size
    if ($_FILES["assignment_file"]["size"] > 500000) {
      $error[] = "Sorry, your file is too large. Upload files less than 5mb.";
    }
    // Allow certain file formats
    if (!in_array($fileExt, $allowed)) {
      $error[] = "The file must be either pdf, doc or docx.";
    }
    if (!empty($errors)) {

      foreach ($errors as $error) {

        $wrong = $error;
      }

      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["assignment_file"]["tmp_name"], $target_file)) {

        $upload_message = $lecturer->CreateAssignment($course_code, $assignment_title, $target_file, $id_number);
      } else {
        $upload_message = "Sorry, there was an error uploading your file.";
      }
    }
  }
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
  <link rel="stylesheet" href="../css/teachdashboard.css">
  <link rel="stylesheet" href="../css/form2.css">
  <title>Document</title>
</head>

<body>
  <?php require_once "header.php"; ?>

  <div class="register_login-content">
    <form action="create_assignment.php" method="POST" enctype="multipart/form-data">
      <h2 class="form-title">Add Assignment</h2>

      <div id="error_message">
        <?php
        if (!empty($errors)) {

          foreach ($errors as $error) {

            echo '<div class="alert alert-info">' . $error . '</div>';
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
        <input type="file" name="assignment_file" required>
      </div>
      <div>
        <input type="submit" class="btn btn-big " id="btn-success" name="create_assignment" value="Create Assignment">
        <a type="button" class="btn btn-big btn-light" href="assignment.php">Cancel</a>
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
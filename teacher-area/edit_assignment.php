<?php

//require '../controllers/LecturerController.php';
require '../config/database.php';
$db=new DB();
$db = $db->get_connection();

//$lecturer = new Lecturer;
$err='';
$error=[];
$message='';
$id=$_GET['id'];
$sql = "SELECT * FROM assignments WHERE assignment_id = '$id' ";
$query = $db->query($sql);
$UserDetails = mysqli_fetch_assoc($query);
$course_code=$UserDetails['course_code'];
$ass_title=$UserDetails['assignment_title'];
$ass_file=$UserDetails['assignment_file'];


if(isset($_POST['update'])){
  $name = $_FILES['file']['name'];
  $nameArray = explode('.', $name);
  $arr_size=sizeof($nameArray);
  $fileExt = $nameArray[$arr_size - 1];
  $allowed = array('pdf', 'doc', 'docx');
  $target_dir = "../uploads/assignments/";

  if ($_FILES["file"]["size"] > 500000) {
//    $error=array_push($error, "Sorry, your file is too large. Upload files less than 5mb.");
    $err="Sorry, your file is too large. Upload files less than 5mb.";
  }

  if (!isset($name)) {
//    $error=array_push($error, "Sorry, your file is too large. Upload files less than 5mb.");
    $err="Upload a file";
  }

  // Allow certain file formats
  if (!in_array($fileExt, $allowed)) {
//    $error = array_push($error,"The file must be either pdf, doc or docx.");
    $err="The file must be either pdf, doc or docx.";
  }
  if(!empty($_POST['course_code'])){

    if(!empty($_POST['assignment_title'])){

      if(empty($err)){
        $message='Assignment Modified Succesfully';
        var_dump($_POST['assignment_title']);
        $ct=$_POST['course_code'];
        $ass_file=$_FILES["file"]["name"];
        $ass_title=$_POST['assignment_title'];
        $sql = "UPDATE assignments SET course_code='$ct',assignment_file='$name', assignment_title='$ass_title' WHERE assignment_id='$id'";
        $db->query($sql);
        var_dump($error,$db->query($sql));




//          $err="something went wrong please try again.";

      }
    }
    else{
//      array_push($error,'Assignment title cant be empty');
      $err='Assignment title cant be empty';
    }

  }
  else{
    $err='course code cant be empty';
//    array_push($error,'course code cant be empty');
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
  <div id="overhead">
    <h3>TEACHER'S DASHBOARD</h3>
  </div>
  <?php require_once "header.php"; ?>

  <div class="register_login-content">
    <form action=" " method="POST" enctype="multipart/form-data">
      <h2 class="form-title">Edit Assignment</h2>

      <div id="error_message">

        <?php
//        if(!empty($error)){
//          echo '<div class="alert alert-danger">' . $error[0] . '</div>';
//        }



        if(!empty($err)){
          echo '<div class="alert alert-danger">' . $err . '</div>';
        }
        if(!empty($message)){
          echo '<div class="alert alert-info">' .'update succesfully' . '</div>';
        }


        ?>



      </div>

      <div>
        <label for="">Course Code</label>
        <input type="text" placeholder="<?= $course_code ?>" name="course_code" id="assignment_name" class="text-input">
      </div>
      <div>
        <label for="">Course Title</label>
        <input type="text" placeholder="<?= $ass_title ?>" name="assignment_title" id="assignment_description" class="text-input">
      </div>
      <div>
        <label for="">Assignment File</label>
        <input type="file" name="file" required>
      </div>


      <div>
        <button type="submit" class="btn btn-big " id="btn-success" name="update">Update Assignment</button>
        <a type="button" class="btn btn-big btn-light" href="assignment.php">Cancle</a>
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
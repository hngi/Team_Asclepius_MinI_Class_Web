<?php

require '../controllers/LecturerController.php';

$lecturer = new Lecturer;

$id_number = $_SESSION['id_number'];


if(isset($_GET['course'])){

    $course = $_GET['course'];

    $ungradeds = $lecturer->SelectUngraded($course);
}

if(isset($_POST['submit_grade'])){

    $grade = $_POST['grade'];
    $submission_id = $_POST['submission_id'];

    $message = $lecturer->AddGrade($submission_id, $grade);
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
  <title>Document</title>
</head>

<body>
  <?php require_once "header.php"; ?>

  <div class="container" id="container-teacherArea">
  <?php
    if(!empty($message)){

        echo '<div class="alert alert-success text-center">'.$message.'</div>';

        header("Refresh:0");
    }


    ?>
    <a href="create_assignment.php" value="" class="btn btn-success mb-4 " id="button-link">Grade Assignment</a>
    <table class="table table-bordered table-responsive-lg table-condensed table-hover">
      <thead class="table-primary">
      
        <tr>

          <th>Submission ID</th>
          <th>Student Name</th>
          <th>Student ID Number</th>
          <th>Assignment File</th>
          <th>Date Submitted</th>
          <th>Action</th>

        </tr>
      </thead>
      <?php

        while($ungraded = mysqli_fetch_assoc($ungradeds)) :

            $user = $lecturer->GetUser($id_number);


      ?>
      <tbody>
        <tr>
        <td><?= $ungraded['submission_id'];?></td>
          <td><?= $user['fullname']; ?></td>
          <td><?= $ungraded['id_number'];?></td>
          <td>
            <?= $ungraded['submission_file'];?>

          </td>
          <td><?= $ungraded['created_at'];?></td>
          <td>
            <form  method="POST" action="grade_assignment.php?course=<?= $course; ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="grade" placeholder="Grade">
                </div>
                <input type="hidden" name="submission_id" value="<?=$ungraded['submission_id']; ?>">
                <div class="form-group">
                    <input type="submit" name="submit_grade" value="Add Grade" class="btn btn-success form-control" >
                </div>

            </form>
            
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
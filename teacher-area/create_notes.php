<?php

  require '../controllers/LecturerController.php';

  $lecturer = new Lecturer;

   /* Not tested. will be tested once the front end guys give a page
    if(!empty($_FILES)){

          $errors = array();
          $name =$_FILES['note']['name'];
          $nameArray = explode('.', $name);
          $fileName = $nameArray[0];
          $fileExt = $nameArray[1];
          $allowed = array('pdf','doc','docx');
          $target_dir = "uploads/notes/";
          $target_file = $target_dir . basename($_FILES["note"]["name"]);    
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

          // Check if file already exists
          if (file_exists($target_file)) {
            $error[] = "Sorry, file already exists.";        
          
          }
          // Check file size
          if ($_FILES["note"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["note"]["tmp_name"], $target_file)) { 
                
                $upload_message = $lecturer->CreateNote($course_code, $note_title,$target_file,$id_number);

            } else {
                $upload_message = "Sorry, there was an error uploading your file.";
            }
        }
        
             
    }*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>


  <script src="js/main.js"></script>
</body>

</html>
<?php

require_once('./config/database.php');

error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


Class User{

    private $db;

    //Constructor to Initiate database connection
    public function __construct(){

      $db = new DB;

      $this->db = $db->get_connection();

    }

    //Method to create Users.
    public function CreateUser($fullname, $email, $role, $password, $confirm_password){
            $errors = array();
            $message = '';

            //check if email in database
              $email_sql = "SELECT * FROM users WHERE email = '$email'";
              $email_query = $this->db->query($email_sql);     
              $emailCount = mysqli_num_rows($email_query);

              if($emailCount != 0){

                $errors[] = "Email already used. Please try another.";
              }
                    
             if(empty($errors)){

              $hashed_password = password_hash($password, PASSWORD_DEFAULT);
              $hash = md5(rand(0, 1000));
              $created_at = date('Y-m-d');
              $status = 1;
              $id_number = substr($role, 0, 3) . rand(10000, 500000);
              $courses = '';
              $dept_code = '';
              $faculty_code = '';
              $image = '';
              $gender = '';
              $insert_sql = "INSERT INTO users (user_id,email,fullname,role,id_number,courses, dept_code,faculty_code,password,image, hash,created_at,status) VALUES(NULL,'$email','$fullname','$role','$id_number','$courses','$dept_code','$faculty_code','$hashed_password','$image','$hash','$created_at','$status')";
              if($insert_query = $this->db->query($insert_sql)){
            
                 $_SESSION['register_message'] = 'Registration Successful, You can now login.';
              
              echo '<script> location.replace("login.php"); </script>';
              
              //header("location: login.php");

              
             }
              
            }else{ 
                 return $errors;
            }
    }

                          
       //Method to login Users
            public function UserLogin($email, $password){
                $errors = array();
                $message = '';

               

                //check if email exists
                $sql = "SELECT * FROM users WHERE email = '$email' and status = 1";
                $query = $this->db->query($sql);
                $UserDetails = mysqli_fetch_assoc($query);
                $count = mysqli_num_rows($query);

                if($count < 1){

                    $errors[] = 'Incorrect Email';

                }else{
                    if(!password_verify($password, $UserDetails['password'])){
                        $errors[] = "Incorrect Password";
                    }
                }

                //check for errors
                if (!empty($errors)) {

                    return $errors;
                    
                }else{
                    //log user in
                    $user_id = $UserDetails['user_id'];
                
                    $_SESSION['User'] = $user_id;
                    $_SESSION['success_flash'] = "You are logged in successfully.";
                    $_SESSION['id_number'] = $UserDetails['id_number'];
                    $person = $UserDetails['role'];
                    

                    if($person == 'student'){
    
                       
                      //header('Location: student-area/dashboard.php');
                      
                      echo '<script> location.replace("student-area/dashboard.php"); </script>';

                    }else{
    
                       echo '<script> location.replace("teacher-area/dashboard.php"); </script>' ;
                 
                     // header('Location: teacher-area/dashboard.php');

                    }
                    
                }

            }

    
    
            
}



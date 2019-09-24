<?php

    require '../config/database.php';

    class Lecturer {

         //Constructor to Initiate database connection
        public function __construct(){

            $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if(mysqli_connect_errno()){

                echo "Database connection failed with following errors:" . mysqli_connect_error();

                die();
            }

        }

        public function CreateCourse($course_code, $course_title, $course_description,$credit_unit, $dept_code, $faculty_code, $id_number){

            $errors = array();
            $message = '';
            $created_at = date('Y-m-d');

            $insert_sql = "INSERT INTO courses (course_id,course_code,course_title,course_description,credit_unit, dept_code,faculty_code, id_number, created_at) 
            VALUES(NULL,'$course_code','$course_title','$course_description','$credit_unit','$dept_code','$faculty_code','$id_number','$created_at')" ;


            if($insert_query = $this->db->query($insert_sql)){

                $message = 'Course created successfully.';

                return $message;
            }

        }

        public function CreateNote($course_code, $note_title,$target_file,$id_number){

            $errors = array();
            $message = '';
            $created_at = date('Y-m-d');

            $insert_sql = "INSERT INTO notes (note_id,course_code,note_title,note_file,id_number,created_at) 
            VALUES(NULL,'$course_code','$note_title','$target_file','$id_number','$created_at')" ;


            $insert_query = $this->db->query($insert_sql) or die(mysqli_error($this->db));

        }

        


    }



?>
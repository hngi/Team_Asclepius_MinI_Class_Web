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

        public function LecturerUploadAssignment($hw,$course_code,$user_id,$due_date){
            $message='';
            if(getimagesize($_FILES[$hw]['tmp_name'])==FALSE){
                $message='please upload a file.';
            }
            else{
                $created_at=date('y-m-d');
                $ass = $_FILES[$hw]['name'];
                $target="assigment/".basename($ass);
                move_uploaded_file($_FILES[$hw]['tmp_name'],$target);
                try{
                    $insert_sql = "INSERT INTO `create_assignment` (user_id,course_code,assignment_name,due_date,created_at) VALUES('$user_id','$course_code','$ass','$due_date','$created_at')" ;
                    $insert_query = $this->db->query($insert_sql) or die(mysqli_error($this->db));
                    $message = 'Assignment Succesfully Submited';
                }
                catch (Exception $e){
                    $message = 'Something Went wrong. Please try again.';
                }


            }
            return $message;
        }

        public function ShowCreatedAss($course_code){

            $sql = "SELECT * FROM assignment where course = '$course_code'";
            $query = $this->db->query($sql);
            $Courses = mysqli_fetch_assoc($query);

            $allcourse=[];


            foreach ($Courses as $item){

                array_push($allcourse,$item);
            }
            return $allcourse;

        }

        


    }



?>
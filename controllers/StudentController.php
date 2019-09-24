<?php

require '../config/database.php';

    class Student {

        public function __construct(){

            $this->db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          
            if(mysqli_connect_errno()){
  
              echo "Database connection failed with following errors:" . mysqli_connect_error();
  
              die();
          }

        }

        public function ShowCourses($dept_code){

            $courses_sql = "SELECT * FROM courses where dept_code = '$dept_code'";
            $course_query = $this->db->query($courses_sql);
            $courses = mysqli_fetch_assoc($course_query);

            return $courses;

        }


        public function RegisterCourses($courses_array, $id_number){

            $message = '';

            $courses = json_encode($courses_array);

            $insert_sql = "UPDATE users SET courses = '$courses' WHERE id_number = '$id_number'";

            if($insert_query = $this->db->query($insert_sql)){

                $message = "Courses registered  successfully";

            }else{

                $message = "Something went wrong, Please try again";
            }

            return $message;
        }

        public function ShowRegdCourses($id_number){

            $sql = "SELECT courses FROM users where id_number = '$id_number'";
            $query = $this->db->query($sql);

            $RegdCourses = mysqli_fetch_assoc($query);

            return $RegdCourses;

        }

        public function ShowCourseNotes($id_number){
            $sql = "SELECT courses FROM users where id_number = '$id_number'";
            $query = $this->db->query($sql);
            $RegdCourses = mysqli_fetch_assoc($query);

            $courses_offered = $RegdCourses['courses'];
            $courses_offered = json_decode($courses_offered);

            foreach($courses_offered as $course){

                $note_sql = "SELECT * FROM notes where course_code = '$course'";
                $note_query = $this->db->query($note_sql);

                $note = mysqli_fetch_assoc($note_query);

                return $note;

            }



        }
    }



?>
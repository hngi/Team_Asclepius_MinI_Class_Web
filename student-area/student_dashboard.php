<?php

require '../controllers/StudentController.php';

$student = new Student;

   /* Testing displaying courses on student dashboard. Take note, only courses for the student's department
   will be shown on his dashboard. 
   

    $dept_code = 'CEG';

    $courses = $student->ShowCourses($dept_code);

    var_dump($courses); 
    
    */


    /* Testing displaying registered courses only. please write all your front-end code under the php tags. Only backend guys
    that understand what is happening here can try to test it. Or ask me for explanation.

    $id_number = 268174;

    $RegdCourses = $student->ShowRegdCourses($id_number);



    $courses_offered = $RegdCourses['courses'];
    $courses_offered = json_decode($courses_offered);

    foreach($courses_offered as $course){

        echo $course. ' ';
    }

    */




    /*Tested displaying notes. Works Perfect. Only notes for registered courses will be displayed.
    

    $id_number = 268174;
    $notes = $student->ShowCourseNotes($id_number);

    var_dump($notes);

    */










?>
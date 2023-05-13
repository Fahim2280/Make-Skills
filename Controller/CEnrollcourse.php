<?php
include '../Model/Enrollcourse.php';

$Username = $_REQUEST['username'];
$Course_title = $_REQUEST['course_title'];
$Instructor_name = $_REQUEST['instructor_name'];
$Enrollment_date = $_REQUEST['enrollment_date'];

if ($Username == null || $Course_title == null || $Instructor_name == null || $Enrollment_date == null) {
    echo "<h1>Please fill up all the information</h1>";
    return;
} else {
    $data['username'] = $Username;
    $data['course_title'] = $Course_title;
    $data['instructor_name'] = $Instructor_name;
    $data['enrollment_date'] = $Enrollment_date;

    addEnrollcourse($data);
    header('location: ../View/EnrollDataView.php');
}

<?php
include '../Model/Enrollcourse.php';

$Username = $_POST['user_email'];
$course_name = $_POST['course_name'];
$course_instructor = $_POST['course_instructor'];
//$Enrollment_date = $_POST['enrollment_date'];
$currentDateTime = date('Y-m-d H:i:s');
if ($Username == null || $course_name == null || $course_instructor == null) {
    echo "<h1>Please fill up all the information</h1>";
    return;
} else {
    $data['user_email'] = $Username;
    $data['course_name'] = $course_name;
    $data['course_instructor'] = $course_instructor;
    $data['enrollment_date'] = $currentDateTime;

    addEnrollcourse($data);
    header('location: ../View/EnrollDataView.php');
}

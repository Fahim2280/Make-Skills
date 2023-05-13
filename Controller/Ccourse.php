<?php
include_once("../Model/coursesDb.php");

$Course_name = $_POST['course_name'];
$Course_Category = $_POST['course_category'];
$Course_Duration = $_POST['course_duration'];
$Course_Price = $_POST['course_price'];
$Course_Details = $_POST['course_details'];
$Course_Instructor = $_POST['course_instructor'];

$Course_Images = $_FILES['course_image']['name'];
$temp_location_I = $_FILES['course_image']['tmp_name'];

$Course_Video = $_FILES['course_video']['name'];
$temp_location_V = $_FILES['course_video']['tmp_name'];

$Course_Rating = $_POST['course_rating'];
$Course_Status = $_POST['course_status'];

$target_dir_I = "../Media/Image/";
$target_dir_V = "../Media/Video/";

if (!empty($Course_Images)) {
    move_uploaded_file($temp_location_I, $target_dir_I . $Course_Images);
} else {
    echo "<h1>select a file  Image</h1>";
    return;
}

if (!empty($Course_Video)) {
    move_uploaded_file($temp_location_V, $target_dir_V . $Course_Video);
} else {
    echo "<h1>select a file Viedo</h1>";
    return;
}

if ($Course_name == null || $Course_Category == null || $Course_Duration == null || $Course_Price == null || $Course_Details == null || $Course_Instructor == null || $Course_Images == null || $Course_Video == null || $Course_Rating == null || $Course_Status == null) {
    echo "<h1>Please fill up all the information</h1>";
    return;
} else {
    $data['course_name'] = $Course_name;
    $data['course_category'] = $Course_Category;
    $data['course_duration'] = $Course_Duration;
    $data['course_price'] = $Course_Price;
    $data['course_details'] = $Course_Details;
    $data['course_instructor'] = $Course_Instructor;
    $data['course_images'] = $target_dir_I . $Course_Images;
    $data['course_video'] = $target_dir_V . $Course_Video;
    $data['course_rating'] = $Course_Rating;
    $data['course_status'] = $Course_Status;
    addCourses($data);
    header('location: ../View/CourseDataView.php');
}

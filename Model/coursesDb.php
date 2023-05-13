<?php

require 'dbConnection.php';

function getAllCourses()
{
    $conn = getConnection();
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function addCourses($data)
{
    $conn = getConnection();
    $sql = "insert into courses (Course_name, Course_Category, Course_Duration, Course_Price,Course_Details,Course_Instructor,Course_Images,Course_Video,Course_Rating,Course_Status) values
('{$data['course_name']}','{$data['course_category']}','{$data['course_duration']}','{$data['course_price']}','{$data['course_details']}','{$data['course_instructor']}','{$data['course_images']}','{$data['course_video']}','{$data['course_rating']}','{$data['course_status']}')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteCourses($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM courses WHERE Course_ID = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateCourses($data)
{
    $conn = getConnection();
    $sql = "update courses set Course_name='{$data['course_name']}',Course_Category='{$data['course_category']}',Course_Duration='{$data['course_duration']}',Course_Price='{$data['course_price']}',Course_Details='{$data['course_details']}',Course_Instructor='{$data['course_instructor']}',Course_Images='{$data['course_images']}',Course_Video='{$data['course_video']}',Course_Rating='{$data['course_rating']}',Course_Status='{$data['course_status']}' where Course_ID='{$data['course_id']}'";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getCoursesId($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM courses WHERE Course_ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $row;
}

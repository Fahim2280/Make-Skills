<?php

require 'dbConnection.php';

function getAllEnrollcourse()
{
    $conn = getConnection();
    $sql = "SELECT * FROM enrollcourse";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function addEnrollcourse($data)
{
    $conn = getConnection();
    $sql = "insert into enrollcourse (Username, Course_Title, Instructor_Name, Enrollment_Date) values
('{$data['username']}','{$data['course_title']}','{$data['instructor_name']}','{$data['enrollment_date']}')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteEnrollcourse($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM enrollcourse WHERE Id = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateEnrollcourse($data)
{
    $conn = getConnection();
    $sql = "update enrollcourse set Course_name='{$data['course_name']}',Course_code='{$data['course_code']}',Section='{$data['section']}',Teacher_name='{$data['teacher_name']}',Student_name='{$data['student_name']}' where ID='{$data['id']}'";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

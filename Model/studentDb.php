<?php

require 'dbConnection.php';

function getAllStudent()
{
    $conn = getConnection();
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function addStudent($data)
{
    $conn = getConnection();
    $sql = "insert into student(Name, Username, Email,Gender, Phone_number, Address, DOB, Password) values
('{$data['name']}','{$data['username']}','{$data['email']}','{$data['gender']}','{$data['phone']}','{$data['address']}','{$data['dob']}','{$data['password']}')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteStudent($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM student WHERE ID = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}



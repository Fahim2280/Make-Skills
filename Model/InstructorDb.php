<?php

require 'dbConnection.php';

function getAllInstructor()
{
    $conn = getConnection();
    $sql = "SELECT * FROM instructor";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function addInstructor($data)
{
    $conn = getConnection();
    $sql = "insert into Instructor (Name, Username, Email,Gender, Phone_number, Address, DOB, Password) values
('{$data['name']}','{$data['username']}','{$data['email']}','{$data['gender']}','{$data['phone']}','{$data['address']}','{$data['dob']}','{$data['password']}')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteInstructor($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM instructor WHERE ID = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateInstructor($data)
{
    $conn = getConnection();
    $sql = "update Instructor set Name='{$data['name']}',Username='{$data['username']}',Email='{$data['email']}',Gender='{$data['gender']}',Phone_number='{$data['phone']}',Address='{$data['address']}',DOB='{$data['dob']}',Password='{$data['password']}' ";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getInstructorId($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM Instructor WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

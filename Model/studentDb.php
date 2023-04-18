<?php

require 'dbConnection.php';

function getAllStudent()
{
    $conn = getConnection();
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);
    $students = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($students, $row);
    }
    return $students;
}

function addStudent($data)
{
    $conn = getConnection();
    $sql = "INSERT INTO student(Name, Username, Email,Gender, Phone_number, Address, DOB, Password) VALUES 
('{$data['Name']}','{$data['Username']}','{$data['Email']}','{$data['Gender']}','{$data['Phone_number']}','{$data['Address']}','{$data['DOB']}','{$data['Password']}')";
    if (mysqli_query($conn, $sql)) {
        return true;
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

function getStudentById($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getStudentByUsername($username)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getStudentByEmail($email)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}


/*
function getStudentByPhone($phone)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE Phone_number = '$phone'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getStudentByAddress($address)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE Address = '$address'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getStudentByDOB($dob)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE DOB = '$dob'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getStudentByPassword($password)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getStudentByName($name)
{
    $conn = getConnection();
    $sql = "SELECT * FROM student WHERE Name = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
*/

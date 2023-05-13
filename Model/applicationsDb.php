<?php

include '../Model/dbConnection.php';

function getAllApplications()
{
    $conn = getConnection();
    $sql = "SELECT * FROM applications";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function addApplication($data)
{
    $conn = getConnection();
    $sql = "insert into applications (Email,applications) values
('{$data['email']}','{$data['file_location']}')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteApplication($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM applications WHERE Id = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


<?php

require 'dbConnection.php';

function getAllAdmin()
{
    $conn = getConnection();
    $sql = "SELECT * FROM Admin";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function addAdmin($data)
{
    $conn = getConnection();
    $sql = "insert into Admin (Name, Username, Email,Gender, Phone_number, Address, DOB, Password) values
('{$data['name']}','{$data['username']}','{$data['email']}','{$data['gender']}','{$data['phone']}','{$data['address']}','{$data['dob']}','{$data['password']}')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteAdmin($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM Admin WHERE ID = $id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateAdmin($data)
{
    $conn = getConnection();
    $sql = "update Admin set Name='{$data['name']}',Username='{$data['username']}',Email='{$data['email']}',Gender='{$data['gender']}',Phone_number='{$data['phone']}',Address='{$data['address']}',DOB='{$data['dob']}',Password='{$data['password']}' where ID='{$data['id']}'";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAdminId($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM Admin WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

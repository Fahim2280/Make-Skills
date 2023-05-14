<?php

// Start a session to store user data
session_start();

// Connect to the database
include '../Model/dbConnection.php';
$conn = getConnection();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the email or username and password from the form
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the email or username and password match the students table
    $query = "SELECT * FROM student WHERE (Email = '$login' OR Username = '$login') AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['ID'];
        $_SESSION['user_name'] = $row['Name'];
        $_SESSION['user_email'] = $row['Email'];
        $_SESSION['user_type'] = 'student';
        header('Location: ../View/student_dashboard.php');
        exit();
    }

    // Check if the email or username and password match the instructors table
    $query = "SELECT * FROM instructor WHERE (Email = '$login' OR Username = '$login') AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['Id'];
        $_SESSION['user_name'] = $row['Name'];
        $_SESSION['user_email'] = $row['Email'];
        $_SESSION['user_type'] = 'instructor';
        header('Location: ../View/instructor_dashboard.php');
        exit();
    }

    // Check if the email or username and password match the admin table
    $query = "SELECT * FROM admin WHERE (Email = '$login' OR Username = '$login') AND Password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['ID'];
        $_SESSION['user_name'] = $row['Name'];
        $_SESSION['user_email'] = $row['Email'];
        $_SESSION['user_type'] = 'admin';
        header('Location: ../View/admin_dashboard.php');
        exit();
    }

    // If the credentials are invalid, show an error message
    $error = 'Invalid email or username and password combination.';
    echo "<script>alert('$error'); window.location.href = '../View/SingIn.php';</script>";
    exit();
}

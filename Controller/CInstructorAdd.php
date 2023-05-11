
<?php

require_once('../Model/InstructorDb.php');

$Name = $_REQUEST['name'];
$Username = $_REQUEST['username'];
$Email = $_REQUEST['email'];
$Gender = $_REQUEST['gender'];
$Phone_number = $_REQUEST['phone'];
$Gender = $_REQUEST['gender'];
$Adderss = $_REQUEST['address'];
$DOB = $_REQUEST['dob'];
$Adderss = $_REQUEST['address'];
$Password = $_REQUEST['password'];

if ($Name == null || $Username == null || $Email == null || $Phone_number == null || $Adderss == null || $DOB == null || $Password == null) {
    echo "<h1>Please fill up all the information</h1>";
    return;
} else {
    $data['name'] = $Name;
    $data['username'] = $Username;
    $data['email'] = $Email;
    $data['gender'] = $Gender;
    $data['phone'] = $Phone_number;
    $data['gender'] = $Gender;
    $data['address'] = $Adderss;
    $data['dob'] = $DOB;
    $data['password'] = $Password;

    addInstructor($data);
    header('location: ../View/SingIn.php');
}

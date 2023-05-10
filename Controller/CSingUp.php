
<?php

require_once('../Model/studentDb.php');

$Name = $_REQUEST['name'];
$Username = $_REQUEST['username'];
$Email = $_REQUEST['email'];
$Gender = $_REQUEST['gender'];
$Phone_number = $_REQUEST['phone'];
$Adderss = $_REQUEST['address'];
$DOB = $_REQUEST['dob'];
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
    $data['address'] = $Adderss;
    $data['dob'] = $DOB;
    $data['password'] = $Password;

    addStudent($data);
    header('location: ../View/SingIn.php');
}

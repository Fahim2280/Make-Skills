<?php
require '../Model/applicationsDb.php';

$Email = $_REQUEST['email'];
$applications = $_FILES['applications']['name'];
$temp_location = $_FILES['applications']['tmp_name'];
$target_dir = "../Media/Document/";

if (!empty($applications)) {
    move_uploaded_file($temp_location, $target_dir . $applications);
} else {
    echo "<h1>select a file</h1>";
    return;
}
if ($Email == null || $applications == null) {
    echo "<h1>Please fill up all the information</h1>";
    return;
} else {
    $data['email'] = $Email;
    $data['file_location'] = $target_dir . $applications;
    addApplication($data);
    header('location: ../View/ApplicationDataView.php');
}

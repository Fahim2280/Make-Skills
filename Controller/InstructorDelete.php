<?php
require '../Model/InstructorDb.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = deleteInstructor($id);
    if ($result) {
        header("Location: ../View/InstructorDataView.php");
    } else {
        echo "Error";
    }
}

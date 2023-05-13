<?php
require '../Model/coursesDb.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = deleteCourses($id);
    if ($result) {
        header("Location: ../View/CourseDataView.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

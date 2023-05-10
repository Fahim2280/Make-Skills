
<?php
require '../Model/studentDb.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = deleteStudent($id);
    if ($result) {
        header("Location: ../View/StudentDataView.php");
    } else {
        echo "Error";
    }
}

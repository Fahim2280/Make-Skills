<?php
require '../Model/applicationsDb.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = deleteApplication($id);
    if ($result) {
        header("Location: ../View/ApplicationDataView.php");
    } else {
        echo "Error";
    }
}
?>
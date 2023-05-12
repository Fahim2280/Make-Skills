
<?php
require '../Model/AdminDb.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result = deleteAdmin($id);
    if ($result) {
        header("Location: ../View/AdminDataView.php");
    } else {
        echo "Error";
    }
}

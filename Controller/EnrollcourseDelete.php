<?php

include '../Model/Enrollcourse.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $result = deleteEnrollcourse($id);
    if($result){
        header("Location: ../View/EnrollDataView.php");
    }
    else{
        echo "Error";
    }
}

?>
<?php
session_start();
session_destroy();
echo "<hr>";
header('location: ../View/SingIn.php');
?>
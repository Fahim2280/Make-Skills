<?php
session_start();
session_destroy();
echo "<hr>";
echo"session destroyed";
header('location: ../View/SingIn.php');

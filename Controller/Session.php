<?php
session_start();
if (!isset($_SESSION['userid'])) {
    if (isset($_COOKIE['userid'])) {
        $_SESSION['userid'] = $_COOKIE['userid'];
    } else
        header('Location: ../View/singin.php');
}

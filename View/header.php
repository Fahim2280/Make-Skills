<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('location: ../View/SingIn.php');
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Skillshare Application</title>
    <link rel="stylesheet" type="text/css" href="header.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">Skillshare</a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <?php if ($_SESSION['user_type'] == "admin") {
                    echo "<li><a href='admin_dashboard.php'>Profile</a></li>";
                }
                if ($_SESSION['user_type'] == "instructor") {
                    echo "<li><a href='admin_dashboard.php'>Profile</a></li>";
                }
                if ($_SESSION['user_type'] == "student") {
                    echo "<li><a href='student_dashboard.php'>Profile</a></li>";
                }
                ?>
                <li><a href="../View/SingIn.php">Sing In</a></li>
                <li><a href="../View/SingUp.php">Sing Up</a></li>
                <li><a href="../Controller/SingOut.php">Sing Out</a></li>
            </ul>
        </nav>
        <div class="user-profile">
            <?php
            // PHP code to display user profile information
            if (isset($_SESSION['user_email'])) {
                echo $_SESSION['user_name'];
            } else {
                header('location: ../View/SingIn.php');
                exit();
            }
            ?>
        </div>
    </header>
</body>

</html>
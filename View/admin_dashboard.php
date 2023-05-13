<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
}
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Skillshare Application</title>
    </header>
    <body>
        <h1>Admin Dashboard</h1>
        <h2>Welcome <?php echo $_SESSION['name']; ?></h2>
        <a href="../Controller/SingOut.php">Sing Out</a>
    </body>
</html>
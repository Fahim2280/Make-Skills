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
    <title>Enroll Course</title>
    <link rel="stylesheet" type="text/css" href="SDV.css">
</head>

<body>
    <?php include 'Header.php';

    echo "<br>";

    require '../Model/Enrollcourse.php';

    echo "<h1>Enroll Data</h1>";
    $result = getAllEnrollcourse();
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "<table>";
        echo "<tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Course Title</th>
                    <th>Instructor Name</th>
                    <th>Enrollment Date</th>
                    <th>Action</th>
                </tr>";
        while ($data = mysqli_fetch_assoc($result)) {
            if ($data["Username"] == $_SESSION["user_email"]) {
                echo "<tr>";
                echo "<td>" . $data["Id"] . "</td>";
                echo "<td>" . $data["Username"] . "</td>";
                echo "<td>" . $data["Course_Title"] . "</td>";
                echo "<td>" . $data["Instructor_Name"] . "</td>";
                echo "<td>" . $data["Enrollment_Date"] . "</td>";
                echo "<td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    } else {
        echo "No data available";
    }

    echo "<br>";

    include 'Footer.php';

    ?>


</body>

</html>
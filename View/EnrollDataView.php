<!DOCTYPE html>
<html>

<head>
    <title>Data View Page</title>
    <link rel="stylesheet" type="text/css" href="SDV.css">
</head>

<body>
    <?php include 'Header.php';

    echo "<br>";

    require '../Model/Enrollcourse.php';

    echo "<h1>Enroll Data</h1>";
    echo "<a href='EnrollcourseAdd.php'>Add Enroll</a>";
    echo "<br>";
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
            echo "<tr>";
            echo "<td>" . $data["Id"] . "</td>";
            echo "<td>" . $data["Username"] . "</td>";
            echo "<td>" . $data["Course_Title"] . "</td>";
            echo "<td>" . $data["Instructor_Name"] . "</td>";
            echo "<td>" . $data["Enrollment_Date"] . "</td>";
            echo "<td>
            <a href='../Controller/EnrollcourseDelete.php?delete=" . $data["Id"] . "'>Delete</a>
            </td>";
            echo "</tr>";
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
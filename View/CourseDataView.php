<!DOCTYPE html>
<html>

<head>
    <title>Course Data</title>
    <link rel="stylesheet" type="text/css" href="SDV.css">
</head>

<body>
    <?php include 'Header.php'; 
    echo "<br>";
    require '../Model/coursesDb.php';
    echo "<h1>Course Data</h1>";
    echo "<a href='CourseAdd.php'>Add Course</a>";
    echo "<br>";
    $result = getAllCourses();
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "<table>";
        echo "<tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Course Category</th>
                    <th>Course Duration</th>
                    <th>Course Price</th>
                    <th>Course Details</th>
                    <th>Course Instructor</th>
                    <th>Course Images</th>
                    <th>Course Video</th>
                    <th>Course Rating</th>
                    <th>Course Status</th>
                    <th>Action</th>
                </tr>";
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data["Course_ID"] . "</td>";
            echo "<td>" . $data["Course_Name"] . "</td>";
            echo "<td>" . $data["Course_Category"] . "</td>";
            echo "<td>" . $data["Course_Duration"] . "</td>";
            echo "<td>" . $data["Course_Price"] . "</td>";
            echo "<td>" . $data["Course_Details"] . "</td>";
            echo "<td>" . $data["Course_Instructor"] . "</td>";
            echo "<td>" . $data["Course_Images"] . "</td>";
            echo "<td>" . $data["Course_Video"] . "</td>";
            echo "<td>" . $data["Course_Rating"] . "</td>";
            echo "<td>" . $data["Course_Status"] . "</td>";
            echo "<td>
            <a href='../View/CourseUpdateView.php?update=" . $data["Course_ID"] . "'>Update</a>
            <a href='../Controller/CourseDelete.php?delete=" . $data["Course_ID"] . "'>Delete</a>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data available";
    }

    include 'Footer.php';
    ?>

</body>
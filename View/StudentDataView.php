<!DOCTYPE html>
<html>

<head>
    <title>Data View Page</title>
    <link rel="stylesheet" type="text/css" href="SDV.css">
</head>

<body>
    <?php
    require '../Model/studentDb.php';
    $result = getAllStudent();
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "<table>";
        echo "<tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>";
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data["Id"] . "</td>";
            echo "<td>" . $data["Name"] . "</td>";
            echo "<td>" . $data["Username"] . "</td>";
            echo "<td>" . $data["Email"] . "</td>";
            echo "<td>" . $data["Gender"] . "</td>";
            echo "<td>" . $data["Phone_number"] . "</td>";
            echo "<td>" . $data["DOB"] . "</td>";
            echo "<td>" . $data["Address"] . "</td>";
            echo "<td>" . $data["Password"] . "</td>";
            echo "<td>
            <a href='../View/StudentUpdateView.php?update=" . $data["Id"] . "'>Update</a>
            <a href='../Controller/StudentDelete.php?delete=" . $data["Id"] . "'>Delete</a>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data available";
    }
    ?>
</body>

</html>
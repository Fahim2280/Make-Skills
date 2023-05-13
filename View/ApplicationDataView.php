<!DOCTYPE html>
<html>

<head>
    <title>Application Data</title>
    <link rel="stylesheet" type="text/css" href="SDV.css">
</head>

<body>
    <?php

    include 'Header.php';

    echo "<br>";

    require '../Model/applicationsDb.php';
    echo "<h1>Application Data</h1>";
    echo "<a href='ApplicationAdd.php'>Add Application</a>";
    echo "<br>";
    $result = getAllApplications();
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "<table>";
        echo "<tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Applications</th>
                    <th>Action</th>
                </tr>";
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data["ID"] . "</td>";
            echo "<td>" . $data["Email"] . "</td>";
            echo "<td>" . $data["applications"] . "</td>";
            echo "<td>
            <a href='../Controller/ApplicationDelete.php?delete=" . $data["ID"] . "'>Delete</a>
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
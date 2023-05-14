<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('location: ../View/SingIn.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<header>
    <title>Skillshare Application</title>
    <style>
        .container {
            display: flex;
        }

        .Data {
            flex: 1;
            padding: 10px;
        }

        .sidebar {
            flex: 0.3;
            background-color: #f2f2f2;
            padding: 10px;
        }

        .sidebar a {
            display: block;
            margin-bottom: 10px;
            color: #000;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .sidebar a:active {
            background-color: #ccc;
        }
    </style>

    <body>
        <?php include 'header.php'; ?>
        <h1>Student Dashboard</h1>
        <h2>Welcome <?php echo $_SESSION['user_name'];
                    ?></h2>
        <?php require '../Model/studentDb.php';
        $result = getAllStudent();
        while ($data = mysqli_fetch_assoc($result)) {
            if ($data['Email'] == $_SESSION['user_email']) {
        ?>
                <div class="container">
                    <div class="Data">
                        <p>Name :<?php echo $data['Name']; ?></p>
                        <p>Uasename : <?php echo $data['Username']; ?></p>
                        <p>Email : <?php echo $data['Email']; ?></p>
                        <p>Gender: <?php echo $data['Gender']; ?></p>
                        <p>Phone : <?php echo $data['Phone_number']; ?></p>
                        <p> Date of Birth: : <?php echo $data["DOB"]; ?></p>
                        <p>Address : <?php echo $data['Address']; ?></p>
                    </div>
                    <div class="sidebar">
                        <a href="../View/ShowEnrollCourse.php">Enroll Data</a>
                    </div>
                </div>
                <!-- <div id="content">
                <h2>Initial content</h2>
            </div>
            <button id='AdminDataView'>Admin Data</button>
            <button id='AdminAdd'>Add Admin</button> -->
        <?php
            } else {
                //echo "You are not logged in";
            }
        }

        ?>


        <?php include 'footer.php'; ?>
        <!-- <script src="../Controller/script.js"></script> -->
    </body>

</html>
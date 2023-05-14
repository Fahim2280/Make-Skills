<?php
require_once('../Model/InstructorDb.php');
//require_once('../Model/dbConnection.php.php');
//$conn = getConnection();

$id = $_GET['update'];

$data = getInstructorId($id);
$Id = $data["Id"];
$Name  = $data["Name"];
$Username = $data["Username"];
$Email = $data["Email"];
$Gender = $data["Gender"];
$Phone_number = $data["Phone_number"];
$DOB = $data["DOB"];
$Address = $data["Address"];
$Password  = $data["Password"];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Instructor</title>
    <link rel="stylesheet" type="text/css" href="SingUp.css">
</head>

<body>
    <div class="container">
        <h2>Update Student</h2>
        <form method="POST" action="../Controller/CIUpdate.php" onsubmit="return validateForm()">
            <div class="form-group">
                <input type="text" id="id" name="id" value=<?php echo $Id ?> hidden>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value=<?php echo $Name ?>>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value=<?php echo $Username ?>>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value=<?php echo $Email ?>>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" value=<?php echo $Gender ?>>
                    <option value=<?php echo $Gender ?>>Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" value=<?php echo $Phone_number ?>>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input id="address" name="address" value=<?php echo $Address  ?>></input>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value=<?php echo $DOB ?>>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value=<?php echo $Password ?>>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="SingUp.css">
    <script src="validation.js"></script>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <h2>Create an Account</h2>
        <form method="POST" action="../Controller/CSingUp.php" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script src="../Controller/validation.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="SingIn.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="form-container">
            <h2>Login to Your Account</h2>
            <form method="post" action="../Model/LoginCheck.php">
                <div class="form-group">
                    <label for="login-username">Username or Email:</label>
                    <input type="text" name="login" id="login" required><br>
                </div>
                <div class="form-group">
                    <label for="login-password">Password:</label>
                    <input type="password" name="password" id="password" required><br>
                </div>
                <button type="submit">Login</button>
            </form>

        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
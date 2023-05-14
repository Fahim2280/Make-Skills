<!DOCTYPE html>
<html>

<head>
    <title>Application Add</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-top: 0;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="email"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group button[type="submit"]:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h2>Application Add</h2>
        <form method="POST" action="../Controller/CApplicationAdd.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="applications">Applications:</label>
                <input type="file" id=" applications" name="applications">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
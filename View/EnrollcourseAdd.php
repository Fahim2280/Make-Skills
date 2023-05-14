<!DOCTYPE html>
<html>

<head>
    <title>Enroll Course</title>
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

        .form-group input[type="text"],
        .form-group input[type="date"] {
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
        <h2>Enroll Course</h2>
        <form method="POST" action="../Controller/CEnrollcourse.php" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="course_title">Course Title:</label>
                <input type="text" id="course_title" name="course_title">
            </div>
            <div class="form-group">
                <label for="instructor_name">Instructor Name:</label>
                <input type="text" id="instructor_name" name="instructor_name">
            </div>
            <div class="form-group">
                <label for="enrollment_date">Enrollment Date:</label>
                <input type="date" id="enrollment_date" name="enrollment_date">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
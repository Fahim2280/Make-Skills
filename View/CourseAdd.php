<!DOCTYPE html>
<html>

<head>
    <title>Course Add</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
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
        <h2>Course Add</h2>
        <form method="POST" action="../Controller/Ccourse.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class=" form-group">
                <label for="course_name">Course Name:</label>
                <input type="text" id="course_name" name="course_name">
            </div>
            <div class="form-group">
                <label for="course_category">Course Category:</label>
                <input type="text" id="course_category" name="course_category">
            </div>
            <div class="form-group">
                <label for="course_price">Course Price:</label>
                <input type="text" id="course_price" name="course_price">
            </div>
            <div class="form-group">
                <label for="course_details">Course Details:</label>
                <input type="text" id="course_details" name="course_details">
            </div>
            <div class="form-group">
                <label for="course_instructor">Course Instructor:</label>
                <input type="text" id="course_instructor" name="course_instructor">
            </div>
            <div class="form-group">
                <label for="course_image">Course Image:</label>
                <input type="file" id="course_image" name="course_image">
            </div>
            <div class="form-group">
                <label for="course_video">Course Video:</label>
                <input type="file" id="course_video" name="course_video">
            </div>
            <div class="form-group">
                <label for="course_duration">Course Duration:</label>
                <input type="text" id="course_duration" name="course_duration">
            </div>
            <div class="form-group">
                <label for="course_status">Course Status:</label>
                <input type="text" id="course_status" name="course_status">
            </div>
            <div class="form-group">
                <label for="course_rating">Course Rating:</label>
                <input type="text" id="course_rating" name="course_rating">
            </div>
            <button type="submit">Submit</button>

        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
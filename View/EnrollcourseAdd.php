<!DOCTYPE html>
<html>

<head>
    <title>Enroll Course</title>
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
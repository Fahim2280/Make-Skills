<!DOCTYPE html>
<html>

<head>
    <title>Course Add</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
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
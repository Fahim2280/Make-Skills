<?php
require '../Model/coursesDb.php';

$id = $_GET['update'];

$data = getCoursesId($id);
$id = $data['Course_ID'];
$name = $data['Course_Name'];
$category = $data['Course_Category'];
$duration = $data['Course_Duration'];
$price = $data['Course_Price'];
$details = $data['Course_Details'];
$instructor = $data['Course_Instructor'];
$image = $data['Course_Images'];
$video = $data['Course_Video'];
$rating = $data['Course_Rating'];
$status = $data['Course_Status'];


?>
<!DOCTYPE html>
<html>

<head>
    <title>Course Update</title>
    <!-- <link rel="stylesheet" type="text/css" href="SDV.css"> -->
</head>

<body>
    <?php include 'Header.php'; ?>
    <div class="container">
        <form method="POST" action="../Controller/CcUpdate.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="form-group">
                <input type="text" id="course_id" name="course_id" value="<?php echo $id ?>" hidden>
                <div class=" form-group">
                    <label for="course_name">Course Name:</label>
                    <input type="text" id="course_name" name="course_name" value="<?php echo $name ?>">
                </div>
                <div class="form-group">
                    <label for="course_category">Course Category:</label>
                    <input type="text" id="course_category" name="course_category" value="<?php echo $category ?>">
                </div>
                <div class="form-group">
                    <label for="course_price">Course Price:</label>
                    <input type="text" id="course_price" name="course_price" value="<?php echo $price ?>">
                </div>
                <div class="form-group">
                    <label for="course_details">Course Details:</label>
                    <input type="text" id="course_details" name="course_details" value="<?php echo $details ?>">
                </div>
                <div class="form-group">
                    <label for="course_instructor">Course Instructor:</label>
                    <input type="text" id="course_instructor" name="course_instructor" value="<?php echo $instructor ?>">
                </div>
                <div class="form-group">
                    <label for="course_image">Course Image:</label>
                    <input type="file" id="course_image" name="course_image" value="<?php echo $image ?>">
                </div>
                <div class="form-group">
                    <label for="course_video">Course Video:</label>
                    <input type="file" id="course_video" name="course_video" value="<?php echo $video ?>">
                </div>
                <div class="form-group">
                    <label for="course_duration">Course Duration:</label>
                    <input type="text" id="course_duration" name="course_duration" value="<?php echo $duration ?>">
                </div>
                <div class="form-group">
                    <label for="course_status">Course Status:</label>
                    <input type="text" id="course_status" name="course_status" value="<?php echo $status ?>">
                </div>
                <div class="form-group">
                    <label for="course_rating">Course Rating:</label>
                    <input type="text" id="course_rating" name="course_rating" value="<?php echo $rating ?>">
                </div>
                <button type="submit">Submit</button>

        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
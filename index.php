<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('location: ../View/SingIn.php');
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./View/index.css">
    <link rel="stylesheet" type="text/css" href="./View/Header.css">
    <link rel="stylesheet" type="text/css" href="./View/Footer.css">
</head>

<body>
    <?php
    include './View/Header.php';
    echo $_SESSION['user_email'];
    require './Model/coursesDb.php';
    $result = getAllCourses();
    $num = mysqli_num_rows($result);
    while ($data = mysqli_fetch_assoc($result)) {
        $img = $data['Course_Images'];
    ?>
        <div class="course-card">
            <div class="course-image-container">
                <img class="course-image" src="<?php echo $img; ?>" alt="Course Image">
            </div>
            <div class="course-details">
                <h1 class="course_name" name="course_name">Course Name :<?php echo $data['Course_Name']; ?></h1>
                <p class="course_Duration" name="course_Duration">Course Duration :<?php echo $data['Course_Duration']; ?></p>
                <p class="course_price" name="course_price">Course Price :<?php echo $data['Course_Price']; ?></p>
                <p class="course_rating" name="course_rating">Course Rating :<?php echo $data['Course_Rating']; ?></p>
                <p class="course_instructor" name="course_instructor">Course Instructor :<?php echo $data['Course_Instructor']; ?></p>
                <p class="course_category" name="course_category">Course Category :<?php echo $data['Course_Category']; ?></p>
                <form action="./Controller/EnrollButton.php" method="post">
                    <input type="hidden" name="course_name" value="<?php echo $data['Course_Name']; ?>">
                    <input type="hidden" name="course_instructor" value="<?php echo $data['Course_Instructor'];; ?>">
                    <input type="hidden" name="course_category" value="<?php echo $data['Course_Category']; ?>">
                    <input type="hidden" name="user_email" value=" <?php echo $_SESSION['user_email']; ?>">
                    <button type="submit" name="enroll" class="enroll-button">Enroll Now</button>
                </form>
            </div>
        </div>
    <?php
    }
    include './View/Footer.php';
    ?>
</body>

</html>
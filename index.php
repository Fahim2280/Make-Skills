<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('location: ./View/SingIn.php');
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            // Listen for keyup event on the search input field
            $('input[name="search"]').on('keyup', function() {
                // Get the search query value
                var query = $(this).val();

                // Make an AJAX request to fetch search results
                $.ajax({
                    url: '../Controller/search.php', // The URL to the server-side script that handles the search
                    method: 'POST',
                    data: {
                        query: query
                    }, // Send the search query to the server
                    success: function(response) {
                        // Update the LiveSearchData div with the search results
                        $('.LiveSearchData').html(response);
                    }
                });
            });
        });
    </script>
</head>

<body>
    <?php
    include './View/header.php';
    ?>
    <div class="SearchBox"></div>
    <input type="text" name="search" placeholder="Search">
    </div>
    <div class="LiveSearchData"></div>
    <div class="button">
        <?php
        if ($_SESSION['user_type'] == "admin") {
            echo "<li><a href='../View/admin_dashboard.php'>Profile</a></li>";
        }
        if ($_SESSION['user_type'] == "instructor") {
            echo "<li><a href='../View/instructor_dashboard.php'>Profile</a></li>";
        }
        if ($_SESSION['user_type'] == "student") {
            echo "<li><a href='../View/student_dashboard.php'>Profile</a></li>";
        } elseif ($_SESSION['user_type'] == "") {
            echo "<li><a href=''>Profile</a></li>";
        }
        ?>
    </div>
    <?php
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
    include './View/footer.php';
    ?>
</body>

</html>
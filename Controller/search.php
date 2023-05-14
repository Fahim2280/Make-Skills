<?php
// search.php
include '../Model/dbConnection.php';
// Perform the necessary operations to fetch the search results based on the Course_Name
if (isset($_POST['query'])) {
    $searchQuery = $_POST['query'];

    $conn = getConnection();
    // Modify the query to fit your specific requirements
    $query = "SELECT * FROM courses WHERE Course_Name LIKE '%" . $searchQuery . "%'";

    // Connect to the database (replace with your own credentials)
    
    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Execute the query
    $result = mysqli_query($conn, $query);
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
}

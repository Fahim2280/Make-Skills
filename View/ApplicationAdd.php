<!DOCTYPE html>
<html>

<head>
    <title>Application Add</title>
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
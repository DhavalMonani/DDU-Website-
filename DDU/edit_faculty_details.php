<!DOCTYPE html>
<html>
<head>
    <title>Edit Faculty Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?>

    <div class="container">
        <h2>Edit Faculty Details</h2>
        <?php
        // Start the session
        session_start();

        // Check if the faculty is logged in
        if (!isset($_SESSION['faculty_logged_in'])) {
            // Redirect to the login page or show an error message
            header("Location: faculty_login.php");
            exit();
        }

        // Include your database connection file
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ddu";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $email = $_SESSION['faculty_email'];
            $name = $_POST["name"];
            $subject = $_POST["subject"];
            $department = $_POST["department"];

            // SQL query to update faculty details
            $query = "UPDATE faculty_details 
                      SET full_name = '$name', subject = '$subject', department = '$department' 
                      WHERE email = '$email'";

            if (mysqli_query($conn, $query)) {
                echo "Faculty details updated successfully.";
            } else {
                echo "Error updating faculty details: " . mysqli_error($conn);
            }
        }

        // Fetch faculty details
        $email = $_SESSION['faculty_email'];
        $query = "SELECT * FROM faculty_details WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $faculty = mysqli_fetch_assoc($result);

        if ($faculty) {
        ?>
        <form action="edit_faculty_details.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $faculty['full_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $faculty['email']; ?>" required disabled>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" value="<?php echo $faculty['subject']; ?>" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" value="<?php echo $faculty['department']; ?>" required>
            </div>
            <button type="submit" class="submit-button">Save Changes</button>
        </form>
        <?php
        } else {
            echo "Faculty not found.";
        }
        ?>

    </div>

    <?php include("footer.php"); ?>

</body>
</html>

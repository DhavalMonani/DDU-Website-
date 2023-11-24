<?php
// Start the session
session_start();

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
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to retrieve faculty data by email
    $query = "SELECT * FROM faculty_details WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $faculty = mysqli_fetch_assoc($result);

    // Check if a faculty member with the given email exists
    if ($faculty) {
        // Verify the entered plaintext password against the hashed password in the database
        if (password_verify($password, $faculty['pass'])) {
            // Password is correct

            // Create a session for the faculty
            $_SESSION['faculty_id'] = $faculty['id'];
            $_SESSION['faculty_email'] = $faculty['email'];
            // After successful login
            $_SESSION['faculty_logged_in'] = true;
            $_SESSION['faculty_email'] = $email; // You can store other data in the session too
            $_SESSION['faculty_subject'] = $faculty['subject'];
            // Redirect to the faculty welcome page
            header("Location: welcome_faculty.php");
            exit();
        }
    }

    // Faculty not found or invalid credentials
    $_SESSION['login_error'] = true;
    header("Location: faculty_login.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>

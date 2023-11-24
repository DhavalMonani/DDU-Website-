<?php
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
    $full_name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Be sure to hash the password for security
    $subject = $_POST["subject"];
    $department = $_POST["department"];

    // Hash the password for security (You should use a more secure hashing method)
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // SQL query to insert faculty data into the database
    $insert_query = "INSERT INTO faculty_details (full_name, email, pass, subject, department) 
                    VALUES ('$full_name', '$email', '$hashed_password', '$subject', '$department')";

    // Execute the query
    if (mysqli_query($conn, $insert_query)) {
        // Registration successful
        header("Location: faculty_login.php"); // Redirect to the faculty login page
        exit();
    } else {
        // Registration failed
        echo "Registration failed. Please try again.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

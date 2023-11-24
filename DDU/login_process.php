<?php
// Step 1: Establish a database connection
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "ddu";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve data from the login form using $_POST
$email = $_POST["username"];
$birthdate = $_POST["password"]; // Date of birth as the password

// Step 3: Data validation and sanitation (you can add more validation as needed)

// Step 4: Verify the login credentials
$sql = "SELECT * FROM student_details WHERE email = '$email' AND birthdate = '$birthdate'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    // Login successful
    $row = $result->fetch_assoc(); // Fetch the user's data
    $username = $row["email"];
    $firstName = $row["firstname"];
    $field = $row["field"];
    // Start a session
    
    // Store user data in session variables
    $_SESSION['username'] = $username;
    $_SESSION['firstname'] = $firstName;
    $_SESSION['field'] = $field;
    
        if ($_SESSION['field'] == 'mca') {
            // Redirect to the marks page for MCA students
            header("Location: welcome.php");
            exit();
        } else {
            // Redirect to a demo page for other students
            header("Location: demo.php");
            exit();
        }
    
    exit();
} else {
    // Login failed, display an error message and redirect back to the registration page
    header("Location: student_register.php?login_error=true");
    exit();
}

// Step 5: Close the database connection
$conn->close();
?>

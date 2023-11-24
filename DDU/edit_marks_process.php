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

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$studentName = $_POST["student_name"];
$sessional = $_POST["sessional"];
$subject = $_POST["subject"];
$marks = $_POST["marks"];
$attendance = $_POST["attendance"];

// Retrieve the student ID from the database based on the student name
$query = "SELECT id FROM student_details WHERE firstname = '$studentName'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $studentId = $row["id"];

    // Update the "marks_and_attendance" table with the provided data
    $sql = "UPDATE marks_and_attendance
            SET marks = $marks, attendance = $attendance
            WHERE student_id = $studentId AND session = '$sessional' AND subject = '$subject'";

    if ($conn->query($sql) === TRUE) {
        echo "Marks and attendance updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Student not found.";
}

// Close the database connection
$conn->close();
?>

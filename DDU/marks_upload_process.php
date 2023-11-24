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
    $subject = $_POST["subject"];
    $session = $_POST["session"];
    $marks = $_POST["marks"];
    $attendance = $_POST["attendance"];

    // Loop through the data for each student
    foreach ($marks as $student_id => $mark) {
        // Validate data as needed
        // Insert the data into your database table for marks and attendance
        $query = "INSERT INTO marks_and_attendance (student_id, subject, session, marks, attendance) 
                  VALUES ('$student_id', '$subject', '$session', '$mark', '$attendance[$student_id]')";
        mysqli_query($conn, $query);
    }

    // Redirect back to the marks upload page or display a success message
    header("Location: marks_upload.php?success=1");
    exit();
}

// Close the database connection
mysqli_close($connection);
?>

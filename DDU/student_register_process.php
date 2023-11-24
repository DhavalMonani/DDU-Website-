<?php
// Step 1: Establish a database connection
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

// Step 2: Retrieve data from the registration form using $_POST
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$field = $_POST["field"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$birthdate = $_POST["birthdate"];

// Step 3: Data validation and sanitation (you can add more validation as needed)

// Step 4: Insert the data into the database
$sql = "INSERT INTO student_details (firstname, lastname, gender, age, field, mobile, email, birthdate)
        VALUES ('$firstname', '$lastname', '$gender', '$age', '$field', '$mobile', '$email', '$birthdate')";

if ($conn->query($sql) === TRUE) {
    // Registration successful, redirect to the login page
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 5: Close the database connection
$conn->close();
?>

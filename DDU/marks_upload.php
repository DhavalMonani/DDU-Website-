<?php
// At the beginning of each protected faculty page
session_start();

if (!isset($_SESSION['faculty_logged_in'])) {
    // Redirect to the login page or show an error message
    header("Location: faculty_login.php");
    exit();
}

// Now the faculty member is considered logged in and can access this page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Marks Upload</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
         include("header.php");
         $faculty_subject = $_SESSION['faculty_subject'];
    ?>
    
    <div class="container">
        <h2>Marks and Attendance Upload</h2>
        <form action="marks_upload_process.php" method="post">
            <div class="form-group">
                <label for="subject">Select Subject:</label>
                <select id="subject" name="subject" required>
                <option value="<?php echo $faculty_subject ?>"><?php echo $faculty_subject; ?></option>

                    <!-- Add more subject options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="session">Select Session:</label>
                <select id="session" name="session" required>
                    <option value="sessional1">Sessional 1</option>
                    <option value="sessional2">Sessional 2</option>
                    <option value="sessional3">Sessional 3</option>
                </select>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Marks</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through each student -->
                    <?php
                    // Include your database connection file
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "ddu";
                    
                    // Create a connection
                    $conn = new mysqli($servername, $username, $password, $database);
                    
                    // Replace this with the actual SQL query to retrieve student data based on the selected subject
                    $query = "SELECT id, firstname FROM student_details WHERE field = 'mca' ";

                    $result = mysqli_query($conn, $query);

                    // Example data; replace this with actual data retrieval
                    while ($row = mysqli_fetch_assoc($result)) {
                        $student_id = $row['id'];
                        $student_name = $row['firstname'];

                        echo "<tr>";
                        echo "<td>$student_id</td>";
                        echo "<td>$student_name</td>";
                        echo "<td><input type='text' name='marks[$student_id]'></td>";
                        echo "<td><input type='text' name='attendance[$student_id]'></td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>

            <button type="submit" class="submit-button">Upload</button>
            <a href="edit_marks.php" class="edit-marks-button">Edit Marks</a>
        </form>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>

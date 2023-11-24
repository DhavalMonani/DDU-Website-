<!DOCTYPE html>
<html>
<head>
    <title>Edit Marks and Attendance</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->

    <div class="container">
        <h2>Edit Marks and Attendance</h2>
        <form action="edit_marks_process.php" method="post">
            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name" required>
            </div>
            <div class="form-group">
                <label for="sessional">Sessional:</label>
                <input type="text" id="sessional" name="sessional" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="marks">Marks:</label>
                <input type="number" id="marks" name="marks" required>
            </div>
            <div class="form-group">
                <label for="attendance">Attendance:</label>
                <input type="number" id="attendance" name="attendance" required>
            </div>
            <button type="submit" class="submit-button">Edit</button>
        </form>
    </div>

    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

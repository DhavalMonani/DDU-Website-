<?php
session_start(); // Start the session on every protected page
if($_SESSION['field'] != 'mca')
{
    header("Location: not_authorized.php");
    exit();
}
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
            table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd; 
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            th {
                background-color: #f2f2f2;
                color: #333;
            }
    </style>
</head>
<body>
<?php include("header.php"); ?> <!-- Include the header content -->
    
    <div class="container">
        <h2>Student Result</h2>
        <?php
        //session_start(); // Start the session
    
        if (isset($_SESSION["firstname"])) {
            $studentName = htmlspecialchars($_SESSION["firstname"]);
            echo "<h3>Results for: $studentName</h3>";
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "ddu";
    
            // Create a connection
            $conn = new mysqli($servername, $username, $password, $database);
            // Prepare and execute a SQL query to fetch the student's result
            $query = "SELECT subject,marks,session,attendance FROM marks_and_attendance WHERE student_id IN(SELECT id from student_details where firstname = '$studentName')";
            $result = mysqli_query($conn, $query);
    
            if(!$result) {
                echo "Query error: " . mysqli_error($conn);
            } else {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table>
                        <tr>
                            <th>Sessional</th>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>Attendance</th>
                        </tr>";
    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row["session"] . "</td>
                            <td>" . $row["subject"] . "</td>
                            <td>" . $row["marks"] . "</td>
                            <td>" . $row["attendance"] . "</td>
                        </tr>";
                    }
    
                    echo "</table>";
                } else {
                    echo "No results found.";
                }
            }
    
            // Close the database connection
            mysqli_close($conn);
        } else {
            echo "<p>Student name not provided.</p>";
        }
        ?>
    </div>
    
    <?php include("footer.php"); ?> <!-- Include the footer content -->
    
</body>
</html>

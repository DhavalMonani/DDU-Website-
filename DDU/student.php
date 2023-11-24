<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Student Portal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->
    
    <div class="container">
        <h2>Welcome to the Student Portal</h2>
        <p>Explore your academic journey and stay connected with us. Register or log in to access your student dashboard.</p>
        <a class="button" href="student_register.php">Register</a>
        <a class="button" href="login.php">Log In</a>
    </div>
    <section class="information">
        <div class="container">
            <h3>Important Information</h3>
            <ul>
                <li><a href="exams.php">Upcoming Exams</a></li>
                <li><a href="events.php">Upcoming Events</a></li>
                <li><a href="news.php">Latest News</a></li>
                <!-- Add more informative links as needed -->
            </ul>
        </div>
    </section>
    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

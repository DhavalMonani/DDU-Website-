<!DOCTYPE html>
<html>
<head>
    <title>Faculty Portal</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Include your CSS file -->
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->

    <div class="container">
        <h1>Welcome to Our College Faculty Portal</h1>
        <p>
            At Dharmsinh Desai University, we believe in fostering a collaborative and innovative educational environment. 
            Our faculty members play a pivotal role in shaping the future of our students. We invite you to 
            explore and engage with our faculty portal to be a part of our academic community.
        </p>
        <p>
            The faculty portal provides a platform for our esteemed educators to manage academic records, 
            interact with students, and contribute to the growth of our institution. Join us in our mission 
            to inspire and educate the next generation of leaders and innovators.
        </p>

        <div class="buttons">
            <!--<a href="faculty_register.php" class="button">Register</a>  Link to faculty registration page -->
            <a href="faculty_login.php" class="button">Login</a> <!-- Link to faculty login page -->
        </div>
    </div>

    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

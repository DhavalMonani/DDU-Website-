<?php
session_start(); // Start the session on every protected page

if (!isset($_SESSION['username'])){
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->
    
    <div class="container">
        <?php
        
        if (isset($_SESSION["username"]) && isset($_SESSION["firstname"])) {
            $username = htmlspecialchars($_SESSION["username"]);
            $firstName = htmlspecialchars($_SESSION["firstname"]);
            echo "<h2>Welcome, $firstName!</h2>";
            echo "<p><a href='view_result.php'>View Your Result</a></p>";
            
        } else {
            echo "<h2>Welcome!</h2>";
        }
        ?>
        <p>This is a demo welcome page for logged-in users.</p>
    </div>
    
    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

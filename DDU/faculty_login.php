<!DOCTYPE html>
<html>
<head>
    <title>Faculty Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?>
    
    <div class="container">
        <h2>Faculty Login</h2>
        <form action="faculty_login_process.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Login</button>
        </form>
    </div>
    
    <?php include("footer.php"); ?>
</body>
</html>

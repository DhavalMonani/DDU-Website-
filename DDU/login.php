<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->
    
    <div class="form-container">
        <h2>Student Login</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" id="username" name="username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Date of Birth:</label>
                <input type="date" id="password" name="password" required>
            </div>
            
            <button type="submit" class="submit-button">Login</button>
        </form>
    </div>
    
    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

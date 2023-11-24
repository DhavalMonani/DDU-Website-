<!DOCTYPE html>
<html>
<head>
    <title>Faculty Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->
    
    <div class="container">
        <h2>Faculty Registration</h2>
        <form action="faculty_register_process.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required size="30"> <!-- Increase the size attribute for a larger input -->
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="computer_engineering">Computer Engineering</option>
                    <option value="civil_engineering">Civil Engineering</option>
                    <option value="mechanical_engineering">Mechanical Engineering</option>
                    <option value="electronics_engineering">Electronics Engineering</option>
                    <option value="chemical_engineering">Chemical Engineering</option>
                    <option value="bca">BCA</option>
                    <option value="mca">MCA</option>
                    <option value="mba">MBA</option>
                    <option value="dental">Dental</option>
                    <option value="hotel_management">Hotel Management</option>
                </select>
            </div>
            <button type="submit" class="submit-button">Register</button>
        </form>
    </div>
    
    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

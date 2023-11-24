<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <?php include("header.php"); ?> <!-- Include the header content -->
    
    <div class="form-container">
        <h2>Student Registration</h2>
        <form action="student_register_process.php" method="post">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            
            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female">Female</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            
            <div class="form-group">
                <label for="field">Field of Study:</label>
                <select id="field" name="field" required>
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
                    <!-- Add more options as needed -->
                </select>            </div>
            
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            
            <button type="submit" class="submit-button">Register</button>
        </form>
    </div>
    
    <?php include("footer.php"); ?> <!-- Include the footer content -->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Create an Account</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Register for Food Redistribution</h2>
    
    <form action="process_register.php" method="POST">
        <label>Full Name:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Email Address:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Are you a Donor or an NGO?:</label><br>
        <select name="role">
            <option value="donor">Food Donor</option>
            <option value="ngo">NGO (Receiver)</option>
        </select><br><br>

        <button type="submit">Create Account</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Food Surplus Platform</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login to Your Account</h2>
    <!-- This form sends the credentials to a processing engine -->
    <form action="process_login.php" method="POST">
        <label>Email Address:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>
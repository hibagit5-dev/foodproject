<?php 
session_start(); 
// Security check: If someone tries to access this page without logging in, throw them back to login page
if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'donor') { 
    header("Location: login.php"); 
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['fullname']; ?>! (Food Donor Port)</h2>
    <hr>
    <h3>Donate Your Surplus Food</h3>
    
    <!-- This form will take food item details -->
    <form action="process_donation.php" method="POST">
        <label>Food Item Description (e.g., Rice, Meals):</label><br>
        <input type="text" name="food_item" required><br><br>

        <label>Quantity / Number of Servings:</label><br>
        <input type="number" name="quantity" required><br><br>

        <label>Your Pickup Address Location:</label><br>
        <input type="text" name="location" required><br><br>

        <button type="submit">List Food Surplus Item</button>
    </form>
    
    <br><br>
    <a href="logout.php">Sign Out / Logout</a>
</body>
</html>
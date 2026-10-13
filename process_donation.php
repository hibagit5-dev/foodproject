<?php
session_start();

// 1. Connect to MySQL (Change 'your_password_here' to your real database password!)
$conn = new mysqli("localhost", "root", "9645160", "food_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Fetch the food data typed into the form boxes
$food = $_POST['food_item'];
$qty = $_POST['quantity'];
$loc = $_POST['location'];

// 3. Write a manual SQL instruction to save this item into the table rows
$sql = "INSERT INTO donations (food_item, quantity, location) VALUES ('$food', '$qty', '$loc')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Food item listed successfully!</h2>";
    echo "<p>Your surplus food has been posted for local NGOs to review.</p>";
    echo "<a href='donor_dashboard.php'>Back to Dashboard</a>";
} else {
    echo "Error saving donation details: " . $conn->error;
}

$conn->close();
?>
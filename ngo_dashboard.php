<?php 
session_start(); 
if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'ngo') { 
    header("Location: login.php"); 
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>NGO Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['fullname']; ?>! (NGO Receiver Port)</h2>
    <hr>
    <h3>Available Food Surplus Postings</h3>
    
    <table border="1" cellpadding="10">
        <tr>
            <th>Food Item</th>
            <th>Quantity / Servings</th>
            <th>Pickup Location</th>
        </tr>

        <?php
        // Include the Donation class blueprint
        include_once 'Donation.php';
        $conn = new mysqli("localhost", "root", "9645160", "food_db");

        // Instantiate the donation object manually
        $donationObj = new Donation($conn);

        // Fetch items through the object method
        $result = $donationObj->getAllDonations();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['food_item'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No food donations available right now.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    
    <br><br>
    <a href="logout.php">Sign Out / Logout</a>
</body>
</html>
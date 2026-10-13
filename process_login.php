<?php
session_start();
// Include the blueprint class
include_once 'User.php';

$conn = new mysqli("localhost", "root", "9645160", "food_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the User Object from your class blueprint
$userObj = new User($conn);

$email = $_POST['email'];
$pass = $_POST['password'];

// Call the login method from the class object
$userData = $userObj->login($email, $pass);

if ($userData) {
    $_SESSION['user_id'] = $userData['id'];
    $_SESSION['fullname'] = $userData['fullname'];
    $_SESSION['role'] = $userData['role'];

    if ($userData['role'] == 'donor') {
        header("Location: donor_dashboard.php");
    } else {
        header("Location: ngo_dashboard.php");
    }
} else {
    echo "Invalid email or password. <a href='login.php'>Try again</a>";
}

$conn->close();
?>
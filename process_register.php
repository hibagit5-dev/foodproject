<?php
// Include the User Class file
include_once 'User.php';

$conn = new mysqli("localhost", "root", "9645160", "food_db");

// Instantiate the Object manually from your blueprint class
$userObj = new User($conn);

$name = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['password']; 
$role = $_POST['role'];

if ($userObj->register($name, $email, $pass, $role)) {
    echo "Account created successfully using OOP logic! <a href='login.php'>Login here</a>";
} else {
    echo "Error processing registration.";
}
$conn->close();
?>
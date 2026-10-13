<?php
class User {
    private $db;

    // Initialize connection when object is created
    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    // Manual registration handler
    public function register($name, $email, $password, $role) {
        $sql = "INSERT INTO users (fullname, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
        return $this->db->query($sql);
    }

    // Manual login tracking handler
    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return false;
    }
}
?>
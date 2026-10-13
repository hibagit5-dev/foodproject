<?php
class Donation {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    // Manual insertion method for food items
    public function addDonation($foodItem, $quantity, $location) {
        $sql = "INSERT INTO donations (food_item, quantity, location) VALUES ('$foodItem', '$quantity', '$loc')";
        return $this->db->query($sql);
    }

    // Manual fetching method to read all items
    public function getAllDonations() {
        $sql = "SELECT * FROM donations";
        return $this->db->query($sql);
    }
}
?>
<?php
require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT id_users, nama FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
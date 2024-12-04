<?php

namespace app\Models;

include(__DIR__ . "/../Config/DatabaseConfig.php");

use app\Config\DatabaseConfig;
use mysqli;

class Product extends DatabaseConfig {
    public $conn;

    public function __construct() {
        // Connect to MySQL database
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database_name, $this->port);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Function to fetch all data
    public function findAll() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // Function to fetch data by ID
    public function findById($id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // Function to create new data
    public function create($data) {
        $productName = $data['product_name'];
        $productPrice = $data['product_Harga'];
        $expiryDate = $data['Tanggal_kadaluarsa'];

        $query = "INSERT INTO products (product_name, product_Harga, Tanggal_kadaluarsa) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sis", $productName, $productPrice, $expiryDate);
        $stmt->execute();
    }

    // Function to update data
    public function update($data, $id) {
        $productName = $data['product_name'];
        $productPrice = $data['product_Harga'];
        $expiryDate = $data['Tanggal_kadaluarsa'];

        $query = "UPDATE products SET product_name = ?, product_Harga = ?, Tanggal_kadaluarsa = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sisi", $productName, $productPrice, $expiryDate, $id);
        $stmt->execute();
    }

    // Function to delete data by ID
    public function delete($id) {
        $query = "DELETE FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

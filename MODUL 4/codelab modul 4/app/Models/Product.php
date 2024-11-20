<?php

namespace app\Models;

include (__DIR__."/../Config/DatabaseConfig.php");

use app\Config\DatabaseCOnfig;
use mysqli;

class Product extends DatabaseCOnfig{
    public $conn;
    public function __construct()
    {
        //connect to database  mysql
        $this->conn = new  mysqli( $this->host, $this->user, $this->password, $this->database_name, $this->port );
        //check koneksi
        if ($this->conn ->connect_error){
            die("Connecting Failed...". $this->conn->connect_error);
        }
    }
    //function menampilkan sebuah data
    public function findAll(){
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        $this->conn->close();
        $data = [];
        while ( $row = $result->fetch_assoc() ) {
            $data[] = $row;
        }
        return $data;
    }
    //function menampilkan data dengan id
    public function findById($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data; // Return the fetched data
    }
    
    //function membuat sebuah data
    public function create($data){
        $productName = $data['product_name'];
        $query = "INSERT INTO products (product_name) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $productName);
        $stmt->execute();
        $this->conn->close();
    } 
    //function update 
    public function update($data, $id) {
        $productName = $data['product_name'];
        $query = "UPDATE products SET product_name = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $productName, $id);
        $stmt->execute();
        $this->conn->close();
    }


    //function delet data dengan id
    public function delete($id){
        $query = "DELETE FROM products WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $this->conn->close();
    }
}
<?php
define('IMAGE_BASE_PATH', '../../php/functions/');

class DatabaseConnection {
    private $host = "localhost";
    private $db_name = "planetwiseof";
    private $username = "root";
    private $password = "";
    private $conn;
    

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function __destruct() {
        $this->conn = null;
    }
}
?>
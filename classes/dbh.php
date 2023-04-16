<?php
class DatabaseConnection {
    private $host = "sql313.epizy.com";
    private $dbname = "epiz_33923784_scandiwebtests";
    private $username = "epiz_33923784";
    private $password = "3FzlQwtP9KXB";

    private $conn;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";

        try {
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Unable to create connection: " . $e->getMessage();
        }
    }
    public function getConnection() {
        return $this->conn;
    }
}
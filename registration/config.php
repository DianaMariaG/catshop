<?php
class Database{
    private $host = "localhost";
    private $username ="diana";
    private $password = "diana123";
    private $database = "catshop";
    private mysqli $conn;

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if($this->conn->connect_error) {
            die("Connection failed".$this->conn->connect_error);
        }
    }

    public function getConnection(): mysqli{
        return $this->conn;
    }
}
?>

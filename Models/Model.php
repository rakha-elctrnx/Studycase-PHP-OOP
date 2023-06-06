<?php
class Model {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "bootcamp";
    protected $connection;

    public function __construct() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->connection) {
            echo "Error: " . mysqli_error($this->connection);
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
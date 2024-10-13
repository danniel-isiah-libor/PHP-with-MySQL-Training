<?php

namespace OOP;

use mysqli;

class Database {

    private $server, $database, $username, $password;

    public $db;
    
    public function __construct() {
        $this->server = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "testoop";
        
        $this->db = new mysqli($this->server, $this->username, $this->password, $this->database);

        if($this->db->connect_error) {
            die("Connection Failed: " . $this->db->connect_error);
        }
    }

    public function __destruct() {
        $this->db->close();
    }
}
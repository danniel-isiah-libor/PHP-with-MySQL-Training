<?php

namespace OOP;

use mysqli;

class Database
{
    private $database, $username, $password, $server;
    public $db;

    public function __construct()
    {
        $this->server = "localhost";
        $this->database = "phpdatabase1";
        $this->username = "root";
        $this->password = "";

        $this->db = new mysqli($this->server, $this->username, $this->password, $this->database);

        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function __destruct()
    {
        $this->db->close();
    }
}
<?php 

namespace OOP;
use mysqli;

class Database{

    private $server, $database, $username, $password;
    public $db;
    public function __construct(){
        $this->server = "localhost";
        $this->database = "blog";
        $this->username = "root";
        $this->password = "";



        $this->db = new mysqli(
            $this -> server,
            $this->username, 
            $this->password,
            $this->database );

        // var_dump($this->db->connect_error);
        if($this->db->connect_error){
            die("Connection failed" . $this->db->connect_error);
        }
    }

    public function __destruct(){
        $this->db->close();
    }
}
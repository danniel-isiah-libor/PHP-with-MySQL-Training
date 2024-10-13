<?php
    namespace Day3;

use mysqli;

    class Database
    {
        private $server, $database, $username, $password;
        public $myConn;
    
        function __construct()
        {   
            $this->server = "localhost";
            $this->username = "root";
            $this->database = "blog";
            $this->password = "";

            $this->myConn = new mysqli($this->server,$this->username, $this->password, $this->database);

            if($this->myConn->connect_error)
            {
                die("Connection Failed " . $this->myConn->connect_error);
            } else { 
                
            }
        }

        function _destruct()
        {
            $this->myConn->close();    
        }


    }
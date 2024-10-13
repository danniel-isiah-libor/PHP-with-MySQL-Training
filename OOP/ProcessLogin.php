<?php

namespace OOP;


require_once "./OOP/Auth.php";

use OOP\Auth;
class ProcessLogin extends Auth
{
    public function __construct()
    {
        if (!isset($_SESSION)) session_start();
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->errors = [];
    }
    public function validate()
    {
        // validation...
        return $this;
    }
}
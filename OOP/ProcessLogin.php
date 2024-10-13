<?php

namespace OOP;

require_once "./OOP/Auth.php";

use OOP\Auth;

class ProcessLogin extends Auth {
    public $email, $password, $errors;

    public function __construct() {
        if (!isset($_SESSION)) session_start();

        $this->email = $_POST['email'];
        $this->password = $_POST['password'];

        $this->errors = [];
    }

    public function validate() {
        $this->validateEmail();
        $this->validatePassword();

        return $this;
    }
    function validateEmail() {
        
        if (empty($this->email)) {
            $this->errors['email'][] = "Email is Required";
        }
        
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'][] = "Email is Invalid Format";
        }
        return $this;
    }
    
    function validatePassword() { 
        if (empty($this->password)) {
            $this->errors['password'][] = "Password is Required";
        }
        
        if ($this->password) {
            $this->errors['password'][] = "Password doesn't Match";
        }
        
        if (strlen($this->password) < 8 || strlen($this->password) > 12) {
            $this->errors['password'][] = "Password must be between 8 and 12 Characters";
        }
        return $this;
    }
    
}
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

        return $this;
    }

    public function validate() {
        $this->validateEmail();
        $this->validatePassword();

        if (count($this->errors) > 0) {
            $_SESSION['errors'] = $this->errors;
            header("Location: login.php");
            die();
        }

        $_SESSION['errors'] = [];

        return $this;
    }

    private function validateEmail() {
        
        if (empty($this->email)) {
            $this->errors['email'][] = "Email is Required";
        }

        return $this;
    }
    
    private function validatePassword() { 
        if (empty($this->password)) {
            $this->errors['password'][] = "Password is Required";
        }
        
        if (strlen($this->password) < 8 || strlen($this->password) > 12) {
            $this->errors['password'][] = "Password must be between 8 and 12 Characters";
        }
        return $this;
    }
    
}
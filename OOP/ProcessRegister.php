<?php

class ProcessRegister {
    public $name, $email, $password, $cpassword, $errors;
    public function __construct() {
        if (!isset($_SESSION)) session_start();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $this->errors = [];
    }

    public function authorization() {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            header("Location: registration.php");
            die();
        }
    }
    
    public function validate() {
        $this->validateName();
        $this->validateEmail();
        $this->validatePassword();
        
        if (count($this->errors) > 0) {
            $_SESSION['errors'] = $this->errors;
            header("Location: registration.php");
            die();
        }

        $_SESSION['errors'] = [];
    }
    
    public function save() {
        //
    }

    public function authentication() {
        $_SESSION['auth'] = [
            'name' => $this->name,
            'email' => $this->password
        ];
        
    }

    public function redirection() {
        header("Location: index.php");
        die();
    }

    private function validateName() {
        /**
         * required
         * string
         * max 50
         */
        
        
        if (empty($this->name)) {
            $this->errors['name'][] = "Name is Required";
        }
        
        if ((int)$this->name && is_numeric((int)$this->name)) {
            $this->errors['name'][] = "Name is Invalid";   
        }
        
        if (strlen($this->name) > 50) {
            $this->errors['name'][] = "Name is too long";
        }
        return $this;
    }
    
    private function validateEmail() {
        /**
         * required
         * email
         * unique
         */
        
        if (empty($this->email)) {
            $this->errors['email'][] = "Email is Required";
        }
        
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'][] = "Email is Invalid Format";
        }
        return $this;
    }
    
    private function validatePassword() {
        if (empty($this->password && $this->cpassword)) {
            $errors['password'][] = "Password is Required";
        }
        
        if ($this->password !== $this->cpassword) {
            $errors['password'][] = "Password doesn't Match";
        }
        
        if (strlen($this->password) < 8 || strlen($this->password) > 12) {
            $errors['password'][] = "Password must be between 8 and 12 Characters";
        }
        return $this;
    }
}
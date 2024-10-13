<?php

namespace OOP;

require_once "./OOP/ProcessRegisterInterface.php";
require_once "./OOP/SavingTrait.php";
require_once "./OOP/Auth.php";

use OOP\ProcessRegisterInterface;
use OOP\SavingTrait;
use OOP\Auth;

class ProcessRegister extends Auth implements ProcessRegisterInterface {
    use SavingTrait;

    private $cpassword;

    public function __construct() {
        if (!isset($_SESSION)) session_start();

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->cpassword = $_POST['cpassword'];

        $this->errors = [];
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

        return $this;
    }

    private function validateName() {
        /**
         * required
         * string
         * max 50
         */
        
        
        if (empty($this->name)) {
            $this->errors['name'][] = "Name is required";
        }

        if ((int)$this->name && is_numeric((int)$this->name)) {
            $this->errors['name'][] = "Name is invalid";
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
            $this->errors['email'][] = "Email is required";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'][] = "Email is invalid format";
        }

        return $this;
    }
    
    private function validatePassword() {
        if ($this->password !== $this->cpassword) {
            $this->errors['password'][] = "Password does not match";
        }

        if (
            strlen($this->password) < 8 ||
            strlen($this->password) > 12
        ) {
            $this->errors['password'][] = "Password must be between 8 and 12 characters";
        }

        return $this;
    }
}
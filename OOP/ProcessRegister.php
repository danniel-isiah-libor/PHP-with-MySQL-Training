<?php

namespace OOP;

require_once "./OOP/ProcessRegisterInterface.php";
require_once "./OOP/SavingTrait.php";
require_once "./OOP/Auth.php";

use OOP\ProcessRegisterInterface;
use OOP\SavingTrait;
use OOP\Auth;

class ProcessRegister extends Auth implements ProcessRegisterInterface
{
    use SavingTrait;

    private
        $confirm_password;

    /**
     * constructor
     */

    function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->confirm_password = $_POST['confirm_password'];
        $this->errors = [];
    }



    function validate()
    {
        $this->errors = [];

        $this->validateName();
        $this->validateEmail();
        $this->validatePassword();

        if (count($this->errors) > 0) {
            $_SESSION['errors'] = $this->errors;

            header("Location: register.php");
            die();
        }

        $_SESSION['errors'] = [];

        return $this;
    }

    private function validateName()
    {
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

    private function validateEmail()
    {
        if (empty($this->email)) {
            $this->errors['email'][] = "Email is required";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'][] = "Email is invalid format";
        }

        return $this;
    }

    private function validatePassword()
    {
        if (empty($this->password)) {
            $this->errors['password'][] = "Password is required";
        }
        
        if ($this->password !== $this->confirm_password) {
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

?>
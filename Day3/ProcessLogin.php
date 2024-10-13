<?php
namespace Day3;
include_once("auth.php");

use Day3\Auth;

class ProcessLogin extends Auth
{
     

    function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->email = $_POST["email"];
        $this->password = $_POST["password"];

        $this->errors = [];    
        
        return $this;
    }

    function validate() {
                
        $this->validateEmail();
        $this->validatePassword();

        //global $errors;
        if (count($this->errors) > 0) 
        {

            $_SESSION['errors'] = $this->errors;
            header("Location: login.php");
            die();
        }

        $_SESSION['errors'] = [];
        return $this;
    }

    private function validateEmail()
    {
        //email - required, email, unique
        //global $errors, $email;
        if (empty($this->email)) {
            $this->errors['email'][] = "Email is required";
        } 
        
        return  $this;
    }

    private function validatePassword()
    {
        //required, minimum 8 chars, password should be the same
        //global $errors, $password, $confirmPassword;
        if (empty($this->password)) {
            $this->errors['password'][] = "Password Required";
        } 
        

        return $this;
    }


}
    
<?php
class ProcessRegistration
{
    public $name, $email, $password, $confirmPassword, $errors;

    function __construct()
    {
        if (!isset($_SESSION)) session_start();
        

        

        $this->name = $_POST["name"];
        $this->email = $_POST["email"];
        $this->password = $_POST["password"];
        $this->confirmPassword = $_POST["confirmPassword"];
        $this->errors = [];    
        
        return $this;
    }

    function authorization(){
        if (isset($_SESSION['auth'])) {
            header("Location: index.php");
            die();
        }

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            header("Location: register.php");
            die();
        }
        return $this;
    }

    function authentication(){
        $_SESSION['auth'] = [
            'name' => $this->name,
            'email' => $this->email
        ];
        return $this;
    }

    function saveToDatabase() {
        return $this;
    }

    function redirection(){
        header("Location: index.php");
        die();

        return $this;
    }
    function validate() {
        
        $this->validateName();
        $this->validateEmail();
        $this->validatePassword();

        //global $errors;
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
        // name = > required, string, maxsize 50
        //global $errors, $name;
        if (empty($this->name)) {
            $this->errors['name'][] = "Name is required";
        } else {
            if (!(int)$this->name &&  !is_numeric($this->name)) {
                if (strlen($this->name) > 50) {
                    $this->errors['name'][] = "Name is too long";
                }
            } else {
                $this->errors['name'][] = "Name is Invalid";
            }
        }
        return $this;
    }

    private function validateEmail()
    {
        //email - required, email, unique
        //global $errors, $email;
        if (empty($this->email)) {
            $this->errors['email'][] = "Email is required";
        } else {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'][] = "Invalid Email Address";
            }
        }
        return  $this;
    }

    private function validatePassword()
    {
        //required, minimum 8 chars, password should be the same
        //global $errors, $password, $confirmPassword;
        if (empty($this->password)) {
            $this->errors['password'][] = "Invalid Password";
        } else {

            if (strlen($this->password) < 8 || strlen($this->password) > 12) {
                $errors['password'][] = "Password Length Invalid";
            } else {
                //if ($password <> $confirmPassword) {
                //     $errors['password'][] = "Password not the same with confirmation";
                // }
            }
        }

        return $this;
    }
}

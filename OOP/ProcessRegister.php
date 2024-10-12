<?php

class ProcessRegister
{
    public $name,
        $email,
        $password,
        $passwordConfirmation,
        $errors;

    /**
     * constructor
     */
    public function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->passwordConfirmation = $_POST['password_confirmation'];

        $this->errors = [];
    }

    /**
     * check if user already logged in
     */
    public function authorization()
    {
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

    /**
     * validate form fields
     */
    public function validate()
    {
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

    /**
     * required
     * string
     * max 50
     */
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

    /**
     * required
     * email
     * unique
     */
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

    /**
     * required
     * min 8
     * max 12
     */
    private function validatePassword()
    {
        if ($this->password !== $this->passwordConfirmation) {
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

    public function save()
    {
        // saving...

        return $this;
    }

    /**
     * set session auth
     */
    public function authentication()
    {
        $_SESSION['auth'] = [
            'name' => $this->name,
            'email' => $this->email
        ];

        return $this;
    }

    /**
     * redirect to index.php
     */
    public function redirection()
    {
        header("Location: index.php");
        die();

        return $this;
    }
}

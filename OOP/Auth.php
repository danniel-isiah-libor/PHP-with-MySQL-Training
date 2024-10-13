<?php

namespace OOP;

abstract class Auth
{
    protected $name, $email;

    public function authorization()
    {

        if (isset($_SESSION['auth'])) {
            header('Location: index.php');
            die();
        }

        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            header("Location: register.php");
            die();
        }

        return $this;
    }

    public function authentication()
    {
        $_SESSION['auth'] = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        return $this;
    }

    
    public function redirection()
    {
        header("Location: index.php");
        die();

        return $this;
    }
}
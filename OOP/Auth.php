<?php

namespace OOP;


abstract class Auth
{
    protected $name,
        $email;
    public function authorization()
    {
        if (isset($_SESSION['auth'])) {
            header("Location: index.php");
            die();
        }
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            header("Location: index.php");
            die();
        }
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
     * 
     * @return void
     */
    public function redirection()
    {
        header("Location: index.php");
        die();
        
        return $this;
    }
}
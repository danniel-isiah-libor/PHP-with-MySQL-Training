<?php

namespace OOP;

require_once "./OOP/Database.php";

use OOP\Database;

abstract class Auth {
    protected $name, $email, $password, $errors;

    public function authorization() {        
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
    
    public function authentication() {
        $databaseClass = new Database();
        
        $sql = "SELECT * FROM users WHERE email = '{$this->email}' LIMIT 1";
        
        $results = $databaseClass->db->query($sql);
        
        if ($results->num_rows > 0) {
            $user = (object)$results->fetch_assoc();

            // check pass
            if (password_verify($this->password, $user->password)) {
                $_SESSION['auth'] = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ];
            }
            else {
                $this->errors['email'][] = "Email or password is incorrect";
            }
        }
        else {
            $this->errors['email'][] = "Email or password is incorrect";
        }
        
        
        return $this;
    }
    
    public function redirection() {
        header("Location: index.php");
        die();
        
        return $this;
    }
}
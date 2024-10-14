<?php
namespace Day3;

require_once("Database.php");
require_once("Middleware.php");

use Day3\Database;
use Day3\Middleware;

abstract class auth extends Middleware
{
    protected $email, $password, $errors, $name;

    function authorization(){
        // $this->guest();
        
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            header("Location: login.php");
            die();
        }
        return $this;
    }
    function authentication(){
        $mySQLi = new Database();

        $sql  = "SELECT * FROM users 
            WHERE email='{$this->email}' LIMIT 1";
        // echo $sql;
        $res = $mySQLi->myConn->query($sql);
        // var_dump($res);
        // die();
        if($res->num_rows>0){
            $user = (object)$res->fetch_assoc();
            if(password_verify($this->password, $user->password)){
                $_SESSION['auth'] = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ];
            } else {
                $this->errors['email'][] = "Email or Password is Incorrect";
            }
            // var_dump($user);
            // die();
            
        } else {
            $this->errors['email'][] = "Email or Password is Incorrect";
        }
        
        if (count($this->errors) > 0) 
        {

            $_SESSION['errors'] = $this->errors;
            header("Location: login.php");
            die();
        }

        $_SESSION['errors'] = [];        
        return $this;
    } 

    function redirection(){
        header("Location: index.php");
        die();

        return $this;
    }
}

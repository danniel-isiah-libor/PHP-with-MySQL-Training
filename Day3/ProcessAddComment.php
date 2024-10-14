<?php

namespace Day3;

include_once("auth.php");
require_once("Database.php");

use Day3\Auth;
use Day3\Database;

class ProcessAddComment extends auth
{

    protected $comment, $blogid;

    function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->comment = $_POST["comment"];
        $this->blogid = $_POST["blogid"];

        $this->errors = [];        
        
    }



    function saveToDatabase()
    {

        $mySQLi = new Database();
        
        $userId = (object)$_SESSION['auth'];
        $commentX = htmlspecialchars($this->comment);

        $sql = "INSERT INTO comments (comment, blogid, commentedby, created_at) 
                    VALUES (
                        '{$commentX}',
                        '{$this->blogid}',
                        '{$userId->id}',                        
                        CURRENT_TIMESTAMP)";
        $mySQLi = new Database();
        $res = $mySQLi->myConn->query($sql);

        header("Location: viewpost.php?id=$this->blogid");
        return $this;
    }
    function authorized()
    {
        $this->authenticated();
        return $this;
    }
    function validate()
    {
        
     
        $this->ValidateComment();
        

        //global $errors;
        
        
        if (count($this->errors) > 0) {

            $_SESSION['errors'] = $this->errors;
            header("Location: addcomment.php");
            die();
        }

        $_SESSION['errors'] = [];
        return $this;
    }



    private function ValidateComment()
    {
        // name = > required, string, maxsize 50
        //global $errors, $name;
        if (empty($this->comment)) {
            $this->errors['comment'][] = "Comment is Required";
        }

        if (strlen($this->name) > 500) {
            $this->errors['comment'][] = "Name is too long";
        }
        return $this;
    }
}

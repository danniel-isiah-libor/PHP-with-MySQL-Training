<?php
namespace Day3;

require_once("Middleware.php");
require_once("Database.php");

use Day3\Middleware;
use Day3\Database;

class ProcessViewPost extends Middleware
{
    public function __construct()
    {
        $this->authenticated();
    }

    function getPost()
    {
        $mySQLi = new Database();
      
        $blogid = $_GET['id'];

        $sql = "SELECT blogs.*, users.name FROM blogs
                INNER JOIN users ON blogs.userid = users.id 
                WHERE blogid = $blogid";
        //var_dump($sql);
        $blog = [];
        $mySQLi = new Database();
        $res = $mySQLi->myConn->query($sql);        
        if($res->num_rows>0)
        {
           $blog = (object)$res->fetch_assoc();
        }
        //var_dump($blogs);
        return $blog;   
    }
}
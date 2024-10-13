<?php

namespace Day3;

require_once("Middleware.php");
require_once("Database.php");

use Day3\Middleware;
use Day3\Database;

class ProcessIndex extends Middleware
{
    public function __construct()
    {
        $this->authenticated();
    }

    function getPosts()
    {
        $mySQLi = new Database();
      
        $sql = "SELECT blogs.*, users.name FROM blogs
                INNER JOIN users ON blogs.userid = users.id 
                ORDER BY blogid";

        $mySQLi = new Database();
        $res = $mySQLi->myConn->query($sql);
        $blogs = [];
        if($res->num_rows>0){
           while ($blog = $res->fetch_assoc()) 
            {
                $blogs[] = (object)$blog;                
            }
            //var_dump($blogs);
            return $blogs;
        }
        
    }
}

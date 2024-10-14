<?php
namespace Day3;

require_once("Middleware.php");
require_once("Database.php");

use Day3\Middleware;
use Day3\Database;

class ProcessViewComments extends Middleware
{
    public function __construct()
    {
        $this->authenticated();
    }

    function getComments()
    {
        $mySQLi = new Database();
      
        $blogid = $_GET['id'];

        $sql = "SELECT * FROM comments 
                WHERE blogid = $blogid";
        //var_dump($sql);
        $blogs = [];
        $mySQLi = new Database();
        $res = $mySQLi->myConn->query($sql);        
        if($res->num_rows>0)
        {
            while ($blog = $res->fetch_assoc()) 
            {
                $blogs[] = (object)$blog;                
            }
        }
        // var_dump($blogs);
        // die();
        return $blogs;
        
    }
}
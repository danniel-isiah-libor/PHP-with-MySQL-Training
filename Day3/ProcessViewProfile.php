<?php
namespace Day3;

require_once("Middleware.php");
require_once("Database.php");

use Day3\Middleware;
use Day3\Database;

class ProcessViewProfile extends Middleware
{
    public function __construct()
    {
        $this->authenticated();

        
    }

    function getProfile();
    {
        $mySQLi = new Database();
      
        $user = $_SESSION['auth'];

        $sql = "SELECT * FROM users                
                WHERE blogid = $user->id";
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
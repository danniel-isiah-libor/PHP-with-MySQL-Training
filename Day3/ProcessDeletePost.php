<?php
    namespace Day3;

    require_once("Middleware.php");
    require_once("Database.php");

    use Day3\Middleware;
    use Day3\Database;
    

    class ProcessDeletePost extends Middleware
    {
        private $postid;

        public function __construct()
        {
            if(!isset($_SESSION)) session_start();
            $this->postid = $_GET["id"];
        }

        public function authorization()
        {
            $this->authenticated();
            // $user = $_SESSION['auth'];
            // $this->checkauthor($user->id, $this->postid);
            return $this;
        }

        public function delete()
        {
            $mySQLi = new Database();            
            
            $mySQLi = new Database();
            $sql = "DELETE FROM  blogs 
                        WHERE blogid = $this->postid"; 
            $res = $mySQLi->myConn->query($sql);
            $sql = "DELETE FROM  comments 
                        WHERE blogid = $this->postid";
            $res = $mySQLi->myConn->query($sql);
            return $this;
        }

        public function redirection()
        {
            header("Location: http://{$_SERVER['SERVER_NAME']}/phpday1/day3/index.php");
            return $this;
        }
    }
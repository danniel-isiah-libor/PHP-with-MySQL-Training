<?php
    namespace Day3;



    require_once("Middleware.php");
    require_once("Database.php");


    use Day3\Middleware;
    use day3\Database;
    use mysqli;

    class ProcessEditPost extends Middleware
    {
        private $title, $subtitle, $body, $errors, $id;

        public function __construct()
        {
            if(!isset($_SESSION)) session_start();

            $this->title = $_POST['title'];
            $this->subtitle = $_POST['subtitle'];
            $this->body = $_POST['body'];
            $this->errors = [];
            $this->id = $_POST['id'];
            
        }

        public function authorization()
        {
            $this->authenticated();
            
            if ($_SERVER['REQUEST_METHOD'] === "GET") {
                header("Location: login.php");
                die();
            }

            return $this;

        }

        public function validate()
        {
            if(empty($this->title)){
                $this->errors['title'][]="Title is required";
            }

            if(strlen($this->title)>250){
                $this->errors['title'][]="Title is too long";
            }

            if(empty($this->body)){
                $this->errors['body'][]="Body is required";
            }

            if(strlen($this->body)>250){
                $this->errors['body'][]="Body is too long";
            }

      

            if (count($this->errors) > 0) {

                $_SESSION['errors'] = $this->errors;
                header("Location: createPost.php");
                die("with error");
            }
    
            $_SESSION['errors'] = [];            
            return $this;
        }

        public function Save()
        {
            $mySQLi = new Database();
            $currentDate  = date('Y-m-d H:i:s');
            $titleX = htmlspecialchars($this->title);
            $subtitleX = htmlspecialchars($this->subtitle);
            $bodyX = htmlspecialchars($this->body);
            $userId = (object)$_SESSION['auth'];
            $sql = "UPDATE blogs SET 
                        title = '{$titleX}',
                        subtitle = '{$subtitleX}',
                        body = '{$bodyX}',                   
                        updated_at = CURRENT_TIMESTAMP 
                        WHERE blogid = $this->id";
        //    var_dump($sql);
        //    die();
            $mySQLi = new Database();
            $res = $mySQLi->myConn->query($sql);

            return $this;
        }

        public function redirection()
        {
            header("Location: viewpost.php?id=" .  $this->id);
            return $this;
        }
    }
<?php
    namespace Day3;



    require_once("Middleware.php");
    require_once("Database.php");


    use Day3\Middleware;
    use day3\Database;
use mysqli;

    class ProcessCreatePost extends Middleware
    {
        private $title, $subtitle, $body, $errors, $photo, $filename;

        public function __construct()
        {
            if(!isset($_SESSION)) session_start();

            $this->title = $_POST['title'];
            $this->subtitle = $_POST['subtitle'];
            $this->body = $_POST['body'];
            $this->errors = [];
            $this->filename = "";
            $this->photo = $_FILES['photo'];
            
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

            if($this->photo){
                $filetype = pathinfo($this->photo['full_path'],PATHINFO_EXTENSION);
                $filename = strtotime('today') . '_' . time() . '_' . date('Y_m_d') . '.' . $filetype;
                $filepath = "uploads/" . $filename;
               $this->filename=$filename;
                if($filetype=='png' || $filetype=='jpg'){
                    move_uploaded_file($this->photo['tmp_name'],$filepath);                    
                }
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
            mysqli_real_escape_string($mySQLi->myConn,$this->title);
            $titleX = htmlspecialchars($this->title);

            mysqli_real_escape_string($mySQLi->myConn,$this->subtitle);
            $subtitleX = htmlspecialchars($this->subtitle);

            mysqli_real_escape_string($mySQLi->myConn,$this->body);
            $bodyX = htmlspecialchars($this->body);

            mysqli_real_escape_string($mySQLi->myConn,$this->filename);
            $filenameX = htmlspecialchars($this->filename);

            
            $userId = (object)$_SESSION['auth'];
            $sql = "INSERT INTO blogs (title, subtitle, body, 
                    userid, created_at, updated_at, photo) VALUES  (
                        '{$titleX}',
                        '{$subtitleX}',
                        '{$bodyX}',
                        {$userId->id},
                        CURRENT_TIMESTAMP,
                        CURRENT_TIMESTAMP,
                        '{$filenameX}'
                        )";

            $mySQLi = new Database();
            $res = $mySQLi->myConn->query($sql);

            return $this;
        }

        public function redirection()
        {
            header("Location: index.php");
            return $this;
        }
    }


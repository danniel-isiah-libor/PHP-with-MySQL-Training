<?php
    namespace Day3;



    require_once("Middleware.php");
    require_once("Database.php");


    use Day3\Middleware;
    use day3\Database;
    use mysqli;

    class ProcessEditPost extends Middleware
    {
        private $title, $userid, $subtitle, $body, $errors, $id, $photo, $filename;

        public function __construct()
        {
            if(!isset($_SESSION)) session_start();

            $this->title = $_POST['title'];
            $this->userid = $_POST['userid'];
            $this->subtitle = $_POST['subtitle'];
            $this->body = $_POST['body'];
            $this->errors = [];
            $this->id = $_POST['id'];
            $this->filename = "";
            
            $this->photo = $_FILES['photo'];
            
            
        }

        public function authorization()
        {
            $this->authenticated();
            // $user = (object)$_SESSION['auth'];
            // if($user->id != $this->userid){
            //     $this->redirection();
            // }
            
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

            mysqli_real_escape_string($mySQLi->myConn,$this->filename);
            $filenameX = htmlspecialchars($this->filename);

            mysqli_real_escape_string($mySQLi->myConn,$this->body);
            $bodyX = htmlspecialchars($this->body);
            $userId = (object)$_SESSION['auth'];
            $sql = "UPDATE blogs SET 
                        title = '{$titleX}',
                        subtitle = '{$subtitleX}',
                        body = '{$bodyX}',                   
                        updated_at = CURRENT_TIMESTAMP,
                        photo = '{$filenameX}' 
                        WHERE blogid = $this->id";
        //    var_dump($sql);
        //    die();
            $mySQLi = new Database();
            $res = $mySQLi->myConn->query($sql);

            return $this;
        }

        public function redirection()
        {
            header("Location: http://{$_SERVER['SERVER_NAME']}/phpday1/day3/viewpost.php?id=".  $this->id);
            // header("Location: viewpost.php?id=" .  $this->id);
            return $this;
        }
    }
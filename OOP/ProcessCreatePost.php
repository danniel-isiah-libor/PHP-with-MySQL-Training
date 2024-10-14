<?php 

namespace OOP;

require_once "./OOP/Middleware.php";
require_once "./OOP/Database.php";


use OOP\Database;
use OOP\Middleware;
class ProcessCreatePost extends Middleware{

  private $title, $body,$errors, $photo, $filepath;
  public function __construct(){
    if(!isset($_SESSION)) session_start();

    $this->title = $_POST['title'];
    $this->body = $_POST['body'];
    $this->photo = $_FILES['photo'];
    $this->errors = [];
  }

  public function authorization(){

    $this->authenticated();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
      header('Location: create-post.php');
      die();
    }

    return $this;
  }

  public function validate(){
      if(empty($this->title)){
        $this->errors['title'][] = "Title is required";
      }
      if(strlen($this->title) > 255){
        $this->errors['title'][] = "Title is too long";
      }

      if(empty($this->body)){
        $this->errors['body'][] = "Body is required";
      }

      if(strlen($this->body) > 1000){
        $this->errors['body'][] = "Body is too long";
      }


      if($this -> photo){
        $fileExtension = pathinfo($this->photo['full_path'], PATHINFO_EXTENSION);
        $filename = strtotime('today') . '_' . time() . '_' . date('Y_m_d') .  '.' . $fileExtension;
        $this->filepath = 'uploads/' . $filename;

        move_uploaded_file($this->photo['tmp_name'], $this->filepath);
        
      }

      if (count($this->errors) > 0) {
        $_SESSION['errors'] = $this->errors;
        header("Location: create-post.php");
        die();
      }



      return $this;
  }

  public function save(){

    $databaseClass = new Database();
    $user = (object)$_SESSION['auth'];

    $title = mysqli_real_escape_string($databaseClass->db, $this->title);
    $title = htmlspecialchars($title);
    $body = mysqli_real_escape_string($databaseClass->db, $this->body);
    $body = htmlspecialchars($body);

    $sql = "INSERT INTO posts (
    user_id,
    title, 
    body,
    photo,
    created_at, 
    updated_at
    ) VALUES ('$user->id',
    '$title',
    '$body',
    '$this->filepath',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP)";

    $databaseClass->db->query($sql);


    return $this;
  }
  
  public function redirect(){
    header('Location: index.php');
    die();
    return $this;
  }
}

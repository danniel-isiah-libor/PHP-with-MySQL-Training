<?php 

namespace OOP;

require_once "./OOP/Middleware.php";
require_once "./OOP/Database.php";

use OOP\Middleware;
use OOP\Database;
class ProcessEditPost extends Middleware{

  private $title, $body, $errors, $postId, $userId;
  public function __construct()
  {
    if(!isset($_SESSION)) session_start();
    {
      $this->postId = $_GET['id'];
      $this->userId = $_GET ['user_id'];
      $this->title = $_GET['title'];
      $this->body = $_GET['body'];
      $this->errors = [];
    }
  }

  public function authorization()
  {


    $this->authenticated();

    $this->author($this->userId, $this->postId);
    // if($_SERVER['REQUEST_METHOD'] === 'GET'){
    //   header('Location: view-post.php/?id=' . $this ->postId);
    //   die();
    // }



    
    return $this;

  }

  public function validate()
  {
      if (empty($this->title)) {
          $this->errors['title'][] = 'Title is required';
      }
      if (strlen($this->title) > 255) {
          $this->errors['title'][] = 'Title is too long';
      }
      if (empty($this->body)) {
          $this->errors['body'][] = 'Body is required';
      }
      if (strlen($this->body) > 1000) {
          $this->errors['body'][] = 'Body is too long';
      }
      if (count($this->errors) > 0) {
          $_SESSION['errors'] = $this->errors;
          header('Location: edit-post.php/?id=' . $this->postId);
          die();
      }
      return $this;
  }

  public function save()
  {
      $databaseClass = new Database();

      $title = mysqli_real_escape_string($databaseClass->db, $this->title);
      $title = htmlspecialchars($title);
      $body = mysqli_real_escape_string($databaseClass->db, $this->body);
      $body = htmlspecialchars($body);


      // $currentDate = date('Y-m-d H:i:s');
      $sql = "UPDATE posts SET 
      title = '{$title}', 
      body = '{$body}',
      updated_at = CURRENT_TIMESTAMP
      WHERE id = {$this->postId}";

      $databaseClass->db->query($sql);

      return $this;
  }
  public function redirect()
    {
        header("Location: http://{$_SERVER['SERVER_NAME']}/nigel_php/view-post.php/?id=" . $this->postId);
        die();
        return $this;
    }





}
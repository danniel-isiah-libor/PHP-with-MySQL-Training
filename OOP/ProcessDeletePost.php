<?php 

namespace OOP;

require_once "./OOP/Middleware.php";

use OOP\Middleware;
class ProcessDeletePost extends Middleware{

  private $postId;

    public function __construct(){
      if(!isset ($_SESSION)) session_start();

      $this -> postId = $_GET['id'];
    }

    public function authorization(){
      $this -> authenticated();

      return $this;
    }

    public function delete(){


      

      return $this;
    }

    public function redirection(){
      header("Location: http://{$_SERVER['SERVER_NAME']}/nigel_php/index.php/?id=" . $this->postId);
      die();

      return $this;
    }

}
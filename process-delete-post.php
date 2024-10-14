<?php 

require_once "./OOP/ProcessDeletePost.php";

use OOP\ProcessDeletePost;

(new ProcessDeletePost())
  ->authorization()
  ->delete()
  ->redirection();

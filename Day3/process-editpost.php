<?php
    namespace Day3; 
  
    include_once("ProcessEditPost.php");
    use Day3\ProcessEditPost;

$ProcessEditPost = new ProcessEditPost;

$ProcessEditPost
    ->authorization()
    ->validate()
    ->Save()
    ->redirection();
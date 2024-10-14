<?php
    namespace Day3; 
  
    include_once("ProcessDeletePost.php");
    use Day3\ProcessDeletePost;

$ProcessDeletePost = new ProcessDeletePost;

$ProcessDeletePost
    ->authorization()
    ->Delete()
    ->redirection();
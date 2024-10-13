<?php
    namespace Day3;
  
    include_once("ProcessCreatePost.php");
use Day3\ProcessCreatePost;

$ProcessCreatePost = new ProcessCreatePost;

$ProcessCreatePost
    ->authorization()
    ->validate()
    ->Save()
    ->redirection();



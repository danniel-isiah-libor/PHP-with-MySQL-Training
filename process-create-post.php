<?php

require_once "./OOP/ProcessCreatePost.php";

use OOP\ProcessCreatePost;

(new ProcessCreatePost())
    ->authorization()
    ->validate()
    ->save()
    ->redirect();

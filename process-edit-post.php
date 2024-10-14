<?php

require_once "./OOP/ProcessEditPost.php";

use OOP\ProcessEditPost;

(new ProcessEditPost())
    ->authorization()
    ->validate()
    ->save()
    ->redirection();
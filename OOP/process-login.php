<?php 

require_once "./ProcessLogin.php";

use OOP\ProcessLogin;

$processLoginClass = new ProcessLogin();

$processLoginClass->authorization()
    ->validate()
    ->authentication()
    ->redirection();

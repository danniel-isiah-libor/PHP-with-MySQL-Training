<?php

require_once "OOP/ProcessLogin.php";

use OOP\ProcessLogin;

$processLoginClass = new ProcessLogin();

$processLoginClass->authorization()
    ->validate()
    ->authentication()
    ->redirection();

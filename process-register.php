<?php

require_once "./OOP/ProcessRegister.php";

$processRegisterClass = new ProcessRegister();

$processRegisterClass
    ->authorization()
    ->validate()
    ->save()
    ->authentication()
    ->redirection();

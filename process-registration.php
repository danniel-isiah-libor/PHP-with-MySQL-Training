<?php

namespace OOP;

require_once "./OOP/ProcessRegister.php";

use OOP\ProcessRegister;

$processRegisterClass = new ProcessRegister();

$processRegisterClass
    ->authorization()
    ->validate()
    ->save()
    ->authentication()
    ->redirection();
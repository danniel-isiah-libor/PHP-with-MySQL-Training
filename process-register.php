<?php

require_once "./OOP/ProcessRegister.php";
// require_once "./Admin/ProcessRegister.php";
// require_once "./Customer/ProcessRegister.php";

use OOP\ProcessRegister;
// use Admin\ProcessRegister as AdminProcessRegister;
// use Customer\ProcessRegister as CustomerProcessRegister;

// new AdminProcessRegister();
// new CustomerProcessRegister();

$processRegisterClass = new ProcessRegister();

$processRegisterClass
    ->authorization()
    ->validate()
    ->save()
    ->authentication()
    ->redirection();

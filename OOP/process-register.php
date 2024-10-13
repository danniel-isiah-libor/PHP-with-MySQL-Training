<?php

require_once "./ProcessRegister.php";

use OOP\ProcessRegister;


$processregister = new ProcessRegister();
$processregister
      ->authorization()
      ->validate()
      ->save()
      ->authentication()
      ->redirection();



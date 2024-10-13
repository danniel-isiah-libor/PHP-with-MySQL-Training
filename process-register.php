<?php

require_once "./OOP/ProcessRegister.php";

use OOP\ProcessRegister;


$processregister = new ProcessRegister();
$processregister
      ->authorization()
      ->validate()
      ->save()
      ->authentication()
      ->redirection();



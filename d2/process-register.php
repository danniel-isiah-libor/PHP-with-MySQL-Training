<?php 

require_once "./ProcessRegister.php";

$processregister = new ProcessRegister();
$processregister->authorization()
                ->validate()
                ->save()
                ->authentication()
                ->redirection();



<?php

require_once "User.php";

class ProcessRegister extends User
{
    public function __construct()
    {
        echo "Initialization... <br>";
    }

    public function validate()
    {
        // var_dump($this->getUser());

        // var_dump($this->getProfile());

        // $this->save();

        echo self::DATABASE_PASSWORD;

        echo "Validating... <br>";
    }

    public function save()
    {
        // saving...
    }

    public function __destruct()
    {
        echo "Close connection...";
    }
}

$class = new ProcessRegister();
$class->validate();
// echo $class::DATABASE_PASSWORD;

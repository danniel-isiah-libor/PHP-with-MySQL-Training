<?php

namespace OOP;

require_once "./OOP/Database.php";

use OOP\Database;

trait SavingTrait
{
    public function save()
    {
        new Database();

        die('Database connected!');

        return $this;
    }
}
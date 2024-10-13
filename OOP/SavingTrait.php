<?php
namespace OOP;

require_once "./Database.php";

use OOP\Database;
trait SavingTrait
{
    public function save()
    {
        new Database();
        // saving...
        die('Database Connected!');


        return $this;
    }
}
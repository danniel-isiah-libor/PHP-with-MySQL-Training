<?php

namespace OOP;

require_once "./OOP/Database.php";

use OOP\Database;

trait SavingTrait
{
    public function save()
    {
        $databaseClass = new Database();

        // $currentDate = date('Y-m-d H:i:s');
        $name = htmlspecialchars($this->name);
        $email = htmlspecialchars($this->email);
        $password = password_hash($this->password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (
        name, 
        email, 
        password, 
        created_at,
        updated_at)
        VALUES (
        '{$name}',
        '{$email}',
        '{$password}',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP
        )";

        $databaseClass->db->query($sql);

        return $this;
    }
}

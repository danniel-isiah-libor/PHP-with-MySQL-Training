<?php
namespace OOP;

require_once "./OOP/Database.php";

use OOP\Database;
trait SavingTrait
{
    public function save()
    {
        $databaseCase = new Database();
        $currentDate = date('Y-m-d H:i:s');

        $name = htmlspecialchars($this->name);
        $email = htmlspecialchars($this->email);
        $password = password_hash($this->password, PASSWORD_ARGON2I);
        $sql = "INSERT INTO users (
        name,
        email,
        password,
        created_at,
        updated_at)
        VALUES(
        '{$name}',
        '{$email}',
        '{$password}',
        '{$currentDate}',
        '{$currentDate}'
        )";
        $query = $databaseCase->db->query($sql);
        // saving...
        // die($query);



        return $this;
    }
}
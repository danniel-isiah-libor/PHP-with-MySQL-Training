<?php

namespace OOP;

require_once "./OOP/Middleware.php";
require_once "./OOP/Database.php";

use OOP\Middleware;
use OOP\Database;

class ProcessIndex extends Middleware
{
    public function __construct()
    {
        $this->authenticated();
    }

    public function getPosts()
    {
        $databaseClass = new Database();

        $sql = "SELECT posts.*, users.email as email FROM posts 
        INNER JOIN users ON posts.user_id = users.id
        ORDER BY posts.updated_at DESC";

        $results = $databaseClass->db->query($sql);

        $rows = [];

        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $rows[] = (object)$row;
            }
        }

        return $rows;
    }
}

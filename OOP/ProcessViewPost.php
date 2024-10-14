<?php

namespace OOP;

require_once "./OOP/Database.php";
require_once "./OOP/Middleware.php";

use OOP\Database;
use OOP\Middleware;

class ProcessViewPost extends Middleware
{
    public function __construct()
    {
        $this->authenticated();
    }

    public function getPost()
    {
        $databaseClass = new Database();

        $postId = $_GET['id'];

        $sql = "SELECT posts.*, users.email as email FROM posts 
        INNER JOIN users ON posts.user_id = users.id 
        WHERE posts.id = $postId LIMIT 1";

        $results = $databaseClass->db->query($sql);

        $post = null;

        if ($results->num_rows > 0) {
            $post = (object)$results->fetch_assoc();
        }

        return $post;
    }
}

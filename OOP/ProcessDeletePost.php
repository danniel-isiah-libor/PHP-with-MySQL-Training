<?php

namespace OOP;

require_once "./OOP/Middleware.php";
require_once "./OOP/Database.php";

use OOP\Middleware;
use OOP\Database;

class ProcessDeletePost extends Middleware
{
    private $postId;

    public function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->postId = $_GET['id'];
    }

    public function authorization()
    {
        $this->authenticated();

        return $this;
    }

    public function delete()
    {
        $databaseClass = new Database();

        $sql = "DELETE FROM posts WHERE id = $this->postId";

        $databaseClass->db->query($sql);

        return $this;
    }

    public function redirection()
    {
        header("Location: http://{$_SERVER['SERVER_NAME']}/playground/index.php");
        die();
    }
}

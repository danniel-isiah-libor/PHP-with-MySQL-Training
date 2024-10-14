<?php

namespace OOP;

class Middleware {
    public function authenticated() {
        if (!isset($_SESSION)) session_start();

        if (!isset($_SESSION['auth']))  {
            header("Location: login.php");
            die();
        }
    }

    public function guest() {
        if (!isset($_SESSION)) session_start();

        if (isset($_SESSION['auth']))  {
            header("Location: index.php");
            die();
        }
    }

    public function author($userId, $postId) {
        if (!isset($_SESSION)) session_start();

        $user = (object)$_SESSION['auth'];

        if ($user->id !== $userId) {
            header("Location: http://{$_SERVER['SERVER_NAME']}/day1/view-post.php/?id=" . $postId);
            die();
        }

        return $this;

    }
}
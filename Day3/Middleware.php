<?php
namespace Day3;

    class Middleware
    {
        public function authenticated()
        {
            if(!isset($_SESSION)) session_start();
            if (!isset($_SESSION['auth'])) {
                header("Location: login.php");
                die();
            }

        }

        public function guest()
        {
            if(!isset($_SESSION)) session_start();
            if (isset($_SESSION['auth'])) {
                header("Location: index.php");
                die();
            }

        }

        public function checkauthor($userid, $postid)
        {
            if(!isset($_SESSION)) session_start();
            $user = $_SESSION['auth'];
            if($userid != $user->id){
                header("Location: http://{$_SERVER['SERVER_NAME']}/phpday1/day3/index.php");
                die();
            }
        }
    }
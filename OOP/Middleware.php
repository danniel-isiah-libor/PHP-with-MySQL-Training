<?php

namespace OOP;
class Middleware {
    public function authenticated(){

        if (!isset($_SESSION)) session_start();

        if (isset($_SESSION['auth'])) {
            header("Location: index.php");
            die();
        }



        return $this;
    }
    public function guest(){

        if (!isset($_SESSION)) session_start();


        if (isset($_SESSION['auth'])) {
            header("Location: index.php");
            die();
        }


        return $this;
    }
}

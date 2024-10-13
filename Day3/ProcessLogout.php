<?php
    namespace Day3;
    class ProcessLogout 
    {
        function __construct()
        {
            if (!isset($_SESSION)) session_start();
            return $this;
        }

        function logout()
        {
            session_destroy();
            header("Location: login.php");
            die();
            return $this;
        }
        function redirection()
        {
            return $this;
        }


    }

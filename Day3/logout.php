<?php
    namespace Day3;
    // if (!isset($_SESSION)) session_start();


    // if ($_SERVER['REQUEST_METHOD'] === "GET") {
    //     session_destroy();
    // }

    // if (isset($_SESSION['auth'])) {
    //     session_destroy();
    // }
    
    // session_destroy();
    // header("Location: login.php");
    // die();

    include_once("ProcessLogout.php");
    use Day3\ProcessLogout;

    (new ProcessLogout())->logout()->redirection();

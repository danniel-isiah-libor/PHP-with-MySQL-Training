<?php
    if (!isset($_SESSION)) session_start();


    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        session_destroy();
    }

    if (isset($_SESSION['auth'])) {
        session_destroy();
    }
    
    session_destroy();
    header("Location: login.php");
    die();
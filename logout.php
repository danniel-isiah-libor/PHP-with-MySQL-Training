<?php

if (!isset($_SESSION)) {
    session_start();
}

// Authorization
if (isset($_SESSION['auth'])) {
    session_destroy();
}

header('Location: login.php');
die();
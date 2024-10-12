<?php

if (!isset($_SESSION)) session_start();

if (isset($_SESSION['auth'])) {
    header("Location: index.php");
    die();
}

$email = $_POST['email'];
$password = $_POST['password'];

// validation...

// authentication ...
$_SESSION['auth'] = [
    'name' => "Danniel Libor", // TODO: wala database...
    'email' => $email
];

header("Location: index.php");
die();

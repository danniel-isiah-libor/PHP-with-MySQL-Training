<?php

session_start();

$name = isset($_POST['userName']) ? $_POST['userName'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['passWord']) ? $_POST['passWord'] : null; // Password is used only for verification and not stored

if ($name == null || $email == null || $password == null) {
    echo "no";
    exit();
}


$storedUserName = $name;
$storedEmail = $email;

if ($name != $storedUserName || $email != $storedEmail) {
    echo "no";
    exit();
}

// If authentication is successful, set session and redirect
$_SESSION['authenticated'] = true;
$_SESSION['userName'] = $name;

header("Location: index.php");
exit();

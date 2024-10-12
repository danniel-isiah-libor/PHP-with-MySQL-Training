<?php

session_start();

$name = isset($_POST['userName']) ? $_POST['userName'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['passWord']) ? $_POST['passWord'] : null;
$confpassword = isset($_POST['confpassWord']) ? $_POST['confpassWord'] : null;

if ($name == null || $email == null || $password == null) {
    echo "no";
    exit();
}

if ($confpassword != $password) {
    echo "nonono";
    exit();
}


$storedUserName = "";
$storedEmail = "";

if ($name != $storedUserName || $email != $storedEmail) {
    echo "no";
    exit();
}

// If authentication is successful, set session and redirect
$_SESSION['authenticated'] = true;
$_SESSION['userName'] = $name;

header("Location: index.php");
exit();
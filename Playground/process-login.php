<?php

$name = isset($_POST['userName']) ? $_POST['userName'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['passWord']) ? $_POST['passWord'] : null;

if ($name == null || $email == null || $password == null) {
    echo "no";
    exit();
}

if ($name != $_POST['userName'] || $email != $_POST['email'] || $password != $_POST['passWord']) {
    echo "no";
    exit();
}

// saving...

header("Location: index.php");

exit();
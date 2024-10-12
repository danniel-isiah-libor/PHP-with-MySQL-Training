<?php

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
// saving...

header("Location: login.php");
exit();

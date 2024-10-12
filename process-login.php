<?php
if (!isset($_SESSION)) session_start();

if (isset($_SESSION['auth'])) {
    header("Location: index.php");
    die();
}

$email = $_POST['email'];
$password = $_POST['password'];

//authentication...
$_SESSION['auth'] =[
    'name' => 'JM', 
    'email' => $email
];


?>
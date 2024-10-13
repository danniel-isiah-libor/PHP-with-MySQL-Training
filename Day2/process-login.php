<?php

include_once("ProcessLogin.php");

$ProcessLoginClass = new ProcessLogin;

$ProcessLoginClass
    ->authorization()
    ->validate()
    ->saveToDatabase()
    ->authentication()
    ->redirection();
    // if (!isset($_SESSION)) session_start();

    // if (isset($_SESSION['auth'])) {
    //     header("Location: index.php");
    //     die();
    // }

    // //var_dump($_POST);
    // $email = $_POST["email"];
    // $password = $_POST["password"];

    // $_SESSION['auth'] = [
    //     'name' => $password,
    //     'email' => $email
    // ];

    // header("Location: index.php");
?>
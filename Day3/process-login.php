<?php
namespace Day3;

include_once("ProcessLogin.php");

use Day3\ProcessLogin;

$ProcessLoginClass = new ProcessLogin;

$ProcessLoginClass
    ->authorization()
    ->validate()    
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
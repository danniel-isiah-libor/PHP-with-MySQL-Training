<?php

require_once "./OOP/ProcessRegister.php";

$processRegisterClass = new ProcessRegister();

$processRegisterClass->__construct();
$processRegisterClass->authorization();
$processRegisterClass->validate();
$processRegisterClass->save();
$processRegisterClass->authentication();
$processRegisterClass->redirection();








// Initialization


// $errors = [
// "name" => ["This is Required", "Invalid Name", "Name is too long"],
// ];

// $errors = [];

// Validation
validate();
// if (!isset($_SESSION)) session_start();

// if (count($errors) > 0) {
//     $_SESSION['errors'] = $errors;

//     header("Location: registration.php");
//     die();
// }


// Saving ...



// Authentication



// Redirection
// session_destroy();

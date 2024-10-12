<?php

// Initialization...
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$errors = [];

/**
 * required
 * string
 * max 50
 */
if (empty($name)) {
    $errors['name'][] = "Name is required";
}

if ((int)$name && is_numeric((int)$name)) {
    $errors['name'][] = "Name is invalid";
}

if (strlen($name) > 50) {
    $errors['name'][] = "Name is too long";
}

/**
 * required
 * email
 * unique
 */
if (empty($email)) {
    $errors['email'][] = "Email is required";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'][] = "Email is invalid format";
}

if (count($errors) > 0) {
    if (!isset($_SESSION)) session_start();
    $_SESSION['errors'] = $errors;

    header("Location: register.php");
    die();
}

// saving ...

// header("Location: index.php");

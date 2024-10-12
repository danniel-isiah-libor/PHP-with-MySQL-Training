<?php

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    header("Location: register.php");
    die();
}

// Initialization...
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['password_confirmation'];

$errors = [];

// Validation...
validate();

if (count($errors) > 0) {
    if (!isset($_SESSION)) session_start();
    $_SESSION['errors'] = $errors;

    header("Location: register.php");
    die();
}

// saving ...

$_SESSION['errors'] = [];

// authentication ...
$_SESSION['auth'] = [
    'name' => $name,
    'email' => $email
];

// redirection...
header("Location: index.php");
die();

function validate()
{
    validateName();
    validateEmail();
    validatePassword();
}

/**
 * required
 * string
 * max 50
 */
function validateName()
{
    global $name, $errors;

    if (empty($name)) {
        $errors['name'][] = "Name is required";
    }

    if ((int)$name && is_numeric((int)$name)) {
        $errors['name'][] = "Name is invalid";
    }

    if (strlen($name) > 50) {
        $errors['name'][] = "Name is too long";
    }

    return;
}

/**
 * required
 * email
 * unique
 */
function validateEmail()
{
    global $email, $errors;

    if (empty($email)) {
        $errors['email'][] = "Email is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'][] = "Email is invalid format";
    }

    return;
}

/**
 * required
 * min 8
 * max 12
 */
function validatePassword()
{
    global $password,
        $passwordConfirmation,
        $errors;

    if ($password !== $passwordConfirmation) {
        $errors['password'][] = "Password does not match";
    }

    if (
        strlen($password) < 8 ||
        strlen($password) > 12
    ) {
        $errors['password'][] = "Password must be between 8 and 12 characters";
    }

    return;
}

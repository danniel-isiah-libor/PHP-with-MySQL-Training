<?php
$errors = [];

if (!isset($_SESSION)) session_start();

if (count($errors) > 0) {
    header("Location: registration.php");
    die();
}
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    header("Location: registration.php");
    die();
}

// Initialization
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

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

$_SESSION['errors'] = [];

// Authentication
$_SESSION['auth'] = [
    'name' => $name,
    'email' => $password
];



// Redirection
// session_destroy();
header("Location: index.php");
die();

function validate() {
    validateName();
    validateEmail();
    validatePassword();
}

function validateName() {
    global $name, $errors;
    /**
     * required
     * string
     * max 50
     */
    
    
    if (empty($name)) {
        $errors['name'][] = "Name is Required";
    }
    
    if ((int)$name && is_numeric((int)$name)) {
        $errors['name'][] = "Name is Invalid";   
    }
    
    if (strlen($name) > 50) {
        $errors['name'][] = "Name is too long";
    }
    return;
}

function validateEmail() {
    global $email, $errors;
    
    /**
     * required
     * email
     * unique
     */
    
    if (empty($email)) {
        $errors['email'][] = "Email is Required";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'][] = "Email is Invalid Format";
    }
    return;
}

function validatePassword() {
    global $password, $cpassword;

    if (empty($password && $cpassword)) {
        $errors['password'][] = "Password is Required";
    }
    
    if ($password !== $cpassword) {
        $errors['password'][] = "Password doesn't Match";
    }
    
    if (strlen($password) < 8 || strlen($password) > 12) {
        $errors['password'][] = "Password must be between 8 and 12 Characters";
    }
    return;
}
<?php
    // echo "Process Login";

    // $email = $_POST('email');

    // var_dump($_POST);

$errors = [];

if (!isset($_SESSION)) session_start();

if (count($errors) > 0) {
    header("Location: login.php");
    die();
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    header("Location: login.php");
    die();
}

// Initialization
$email = $_POST['email'];
$password = $_POST['password'];

// $errors = [
// "name" => ["This is Required", "Invalid Name", "Name is too long"],
// ];

// $errors = [];

// Validation
validate();
// if (!isset($_SESSION)) session_start();

// if (count($errors) > 0) {
//     $_SESSION['errors'] = $errors;

//     header("Location: login.php");
//     die();
// }


// Saving ...

$_SESSION['errors'] = [];

// Authentication
$_SESSION['auth'] = [
    'email' => $email,
    'password' => $password
];



// Redirection
// session_destroy();
header("Location: index.php");
die();

function validate() {
    validateEmail();
    validatePassword();
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
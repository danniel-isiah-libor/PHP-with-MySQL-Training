<?php

/** 
echo "<br> NAME :" .  $_POST["name"] . "<br>";
    echo "EMAIL :" .  $_POST["email"] . "<br>";
    echo "PASSWORD :" .  $_POST["password"] . "<br>";
    echo "CONFIRM PASSWORD :" .  $_POST["confirmPassword"] . "<br>";  **/
include_once("ProcessRegistration.php");

$ProcessRegisterClass = new ProcessRegistration;

$ProcessRegisterClass
    ->authorization()
    ->validate()
    ->saveToDatabase()
    ->authentication()
    ->redirection();

// if (isset($_SESSION['auth'])) {
//     header("Location: index.php");
//     die();
// }

// if ($_SERVER['REQUEST_METHOD'] === "GET") {
//     header("Location: register.php");
//     die();
// }




// $name = $_POST["name"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// $confirmPassword = $_POST["confirmPassword"];


// $errors = [];
// validate();
// if (count($errors) > 0) {

//     $_SESSION['errors'] = $errors;
//     header("Location: register.php");
//     die();
// }

// //saving

// //authentication
// $_SESSION['auth'] = [
//     'name' => $name,
//     'email' => $email
// ];

// //session_destroy();
// header("Location: index.php");
// die();

// function validate()
// {
//     global $errors, $name, $email, $password, $confirmPassword;
//     validateName();
//     validateEmail();
//     validatePassword();
// }


// function validateName()
// {
//     // name = > required, string, maxsize 50
//     global $errors, $name;
//     if (empty($name)) {
//         $errors['name'][] = "Name is required";
//     } else {
//         if (!(int)$name &&  !is_numeric($name)) {
//             if (strlen($name) > 50) {
//                 $errors['name'][] = "Name is too long";
//             }
//         } else {
//             $errors['name'][] = "Name is Invalid";
//         }
//     }
//     return;
// }

// function validateEmail()
// {
//     //email - required, email, unique
//     global $errors, $email;
//     if (empty($email)) {
//         $errors['email'][] = "Email is required";
//     } else {
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errors['email'][] = "Invalid Email Address";
//         }
//     }
//     return;
// }

// function validatePassword()
// {
//     //required, minimum 8 chars, password should be the same
//     global $errors, $password, $confirmPassword;
//     if (empty($password)) {
//         $errors['password'][] = "Invalid Password";
//     } else {

//         if (strlen($password) < 8 || strlen($password) > 12) {
//             $errors['password'][] = "Password Length Invalid";
//         } else {
//             //if ($password <> $confirmPassword) {
//            //     $errors['password'][] = "Password not the same with confirmation";
//            // }
//         }
//     }

//     return;
// }

// //header("Location: index.php");

<?php 

require_once "ProcessRegistration";


if ($_SERVER['REQUEST_METHOD'] === "GET") {
    header('Location: register.php ');
    die();
}

//Initialization
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conPassword = $_POST['conPassword'];

$errors = [];
// var_dump($email) 
/**
 * required
 * string
 * max 50
 */

 validate();

    if(count($errors) > 0){ 
        $_SESSION['errors'] = $errors;

        header("Location: registration.php");
        die();
    }
//saving.....

$_SESSION['errors'] = [];

//authentication...
$_SESSION['auth'] =[
    'name' => $name,
    'email' => $email
];

// session_destroy();
header("Location: index.php");
die();


function validate()
{
    validateName();
    validateEmail();
   //validatePassword();
}

function validateEmail()
{
    global $email ,$errors;
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors['email'][] = "Email is invalid format";
    }

}

 
function validateName()
{
    global $name,$errors ;

    if(empty($name))
    {
        $errors['name'][] = "Name is required!";
    }

    if(!is_string($name))
    {
        $errors['name'][] = "Name is invalid!";
    }
     
    if(strlen($name) > 50)
    {
        $errors['name'][] = "Name is too long";
    }

}

function validatePassword()
{
    global $password, $conPassword ,$errors;

    if($password !== $conPassword){
        
        $errors['password'] [] = "Password doest not match!";
    }

    if(strlen($password) >= 2 || 
    strlen($password) <= 4)
    {
        $errors['password'] [] = "Password must be at least 4 Char!";
    }

    return;
}
 
// header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once "head-tag.php";

if (!isset($_SESSION)) session_start();

if (isset($_SESSION['auth']))  {
    header("Location: index.php");
    die();
}

// session_destroy();

$errors = $_SESSION['errors'] ?? [];

// var_dump($_SESSION['errors']);
?>

<body class="bg-secondary">
    <h1>Registration Page</h1>

<div class="container-fluid d-flex align-items-center justify-content-center"> 
<div class="container">
    <div class="heading">Registration</div>
    <form action="./process-register.php" method="POST" class="form">
        <input required class="input" type="name" name="name" id="name" placeholder="Name">
        <?php
        echo "<p style='color : red'>" . implode(',', $errors['name'] ?? []) . "</p>";
        ?>
        <input required class="input" type="text" name="email" id="email" placeholder="E-mail">
        <?php
        echo "<p style='color : red'>" . implode(',', $errors['email'] ?? []) . "</p>";
        ?>
        <input required class="input" type="password" name="password" id="password" placeholder="Password">
        <?php
        echo "<p style='color : red'>" . implode(',', $errors['password'] ?? []) . "</p>";
        ?>
        <input required class="input" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
        <span class="forgot-password"><a class="hover-none">Already Have an Account? </a><a href="./login.php" class="text-decoration-underline">Login Here</a></span>
        <input class="login-button" type="submit" value="Register" action="./process-register.php">    
    </form>
    <span class="agreement"><a href="#">Learn user license agreement</a></span>
</div>
</div> 

<?php require_once "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
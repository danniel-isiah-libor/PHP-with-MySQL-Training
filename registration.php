<!DOCTYPE html>
<html lang="en">

<?php require_once "head-tag.php";

if (!isset($_SESSION)) session_start();

if(isset($_SESSION['auth'])){
    header("Location: index.php");
    die();
}

// session_destroy();
$errors = $_SESSION['errors'] ?? [];

//session_destroy();

//  var_dump($errors);

?>



<body>
<h1 class="text-center">REGISTRATION</h1> 

<div class="container">
        <form action="/training/process-registration.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" >
                <?php 
                echo "<p style='color: red'>" . implode(',', $errors['name'] ?? []). "</p>";
                ?>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
                <?php 
                echo "<p style='color: red'>" . implode(',', $errors['email'] ?? []). "</p>";
                ?>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" >
                <?php 
                echo "<p style='color: red'>" . implode(',', $errors['password'] ?? []). "</p>";
                ?>
            </div>
  
            <div class="mb-3">
                <label for="conPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="conPassword" name="conPassword" >
            </div>
  
            <button type="submit" class="btn btn-primary">Submit</button>
         
            <div>
                <p>Already have an account?</p>
                <a href="./login.php">Login</a>
            </div>
        </form> 
       
    </div>

<?php require_once "footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
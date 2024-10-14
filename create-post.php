<!DOCTYPE html>
<html lang="en">

<?php 
require_once "head-tag.php"; 

require_once "./OOP/Middleware.php";

use OOP\Middleware;

(new Middleware())->authenticated();

$errors = $_SESSION['errors'] ?? [];

?>

<body class="bg-secondary">
    <?php require_once "header.php" ?>

    <h1>Create Post</h1>

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="heading">Create Post</div>
            <form action="/day1/process-create-post.php" method="POST" class="form">
                <input required class="input" type="text" name="title" id="title" placeholder="Title">
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['title'] ?? []) . "</p>";
                ?>
                <textarea required class="input" type="text" name="body" id="body" placeholder="What's on your mind?"></textarea>
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['body'] ?? []) . "</p>";
                ?>
                <input class="login-button" type="submit" value="Post">
                <input type="file" name="photo">
            </form>
        </div>
    </div>

    <?php require_once "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
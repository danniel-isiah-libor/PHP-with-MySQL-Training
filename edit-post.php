<!DOCTYPE html>
<html lang="en">

<?php 
require_once "head-tag.php"; 

require_once "./OOP/Middleware.php";
require_once "./OOP/ProcessViewPost.php";

use OOP\Middleware;
use OOP\ProcessViewPost;

$middleware = new Middleware();
$middleware->authenticated();

$post = (new ProcessViewPost())->getPost();

$middleware->author($post->user_Id, $post->id);

?>

<body class="bg-secondary">
    <?php require_once "header.php" ?>
    <h1>Edit Post</h1>    

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="heading">Edit Post</div>
            <form action="/day1/process-edit-post.php" method="PUT" class="form">
                <input type="hidden" value="<?php echo $post->id; ?>" name="id">
                <input type="hidden" value="<?php echo $post->user_id; ?>" name="id">
                <input required value="<?php echo $post->title; ?>" class="input" type="text" name="title" id="title" placeholder="Title">
                    <?php
                    echo "<p style='color: red'>" . implode(',', $errors['title'] ?? []) . "</p>";
                    ?>
                <input required class="input" type="text" name="body" id="body" placeholder="What's on your mind?" value="<?php echo $post->body; ?>">
                </input>
                    <?php
                    echo "<p style='color: red'>" . implode(',', $errors['body'] ?? []) . "</p>";
                    ?>
                <input class="login-button" type="submit" value="Save Post">    
            </form>
        </div>
    </div>

    <?php require_once "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
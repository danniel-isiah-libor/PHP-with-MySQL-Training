<!DOCTYPE html>
<html lang="en">

<?php
    require_once "head-tag.php";
    require_once "./OOP/Middleware.php";
    require_once "./OOP/ProcessViewPost.php";

    use OOP\Middleware;
    use OOP\ProcessViewPost;

    (new Middleware())->authenticated();
    $post = (new ProcessViewPost())->getPost();
?>

<body>

    <?php require_once 'header.php'; ?>
    
    <h1>View Post</h1>

    <h1>
        Title: <?php echo $post->title; ?>
    </h1>
    <p>
        Body: <?php echo $post->body; ?>
    </p>
    <small>
        Written: <?php echo $post->email; ?>
    </small>

    <?php require_once 'footer.php'; ?>
</body>
</html>
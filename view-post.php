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

if (!isset($_SESSION)) session_start();
$user = (object)$_SESSION['auth'];
?>

<body>

    <?php require_once "header.php"; ?>

    <h1>View Post</h1>

    <?php if ($post->user_id === $user->id) { ?>
        <a href="/playground/edit-post.php/?id=<?php echo $post->id; ?>" class="btn btn-primary">Edit Post</a>

        <form action="/playground/process-delete-post.php" method="DELETE">
            <input type="hidden" value="<?php echo $post->id; ?>" name="id">
            <input type="hidden" value="<?php echo $post->user_id; ?>" name="user_id">
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>
    <?php } ?>



    <h1>
        Title: <?php echo $post->title; ?>
    </h1>

    <p>
        Body: <?php echo $post->body; ?>
    </p>

    <img src="/playground/<?php echo $post->photo; ?>" />

    <small>
        Written by: <?php echo $post->email; ?>
    </small>

    <?php require_once "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
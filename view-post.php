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

// $middleware->author($post->user_Id, $post->id);

if (!isset($_SESSION)) session_start();
$user = (object)$_SESSION['auth'];
?>

<body class="bg-secondary">
    <?php require_once "header.php" ?>
    <h1>View Post</h1>
    
    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="card">
                <h5 class="card-header">
                    Written by: <?php echo $post->email; ?>
                </h5>
                <div class="card-body">
                    <h5 class="card-title">
                        Title: <?php echo $post->title; ?>
                    </h5>
                    <p class="card-text">
                        Body: <?php echo $post->body; ?>
                    </p>
                    <?php if($post->user_id === $user->id) { ?>
                        <a href="/day1/edit-post.php/?id=<?php echo $post->id; ?>" class="btn btn-primary">Edit Post</a>
                        <form class="mt-2" action="/day1/process-delete-post.php" method="DELETE">
                            <input type="hidden" value="<?php echo $post->id; ?>" name="id">
                            <input type="hidden" value="<?php echo $post->user_id; ?>" name="user_id">
                            <a href="/day1/process-delete-post.php/?id=<?php echo $post->id; ?>" class="btn btn-danger">Delete Post</a>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    

    <?php require_once "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
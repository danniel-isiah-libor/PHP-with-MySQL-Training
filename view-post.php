<!DOCTYPE html>
<html lang="en">
<?php require_once "head-tag.php";
require_once "./OOP/Middleware.php";
require_once "./OOP/ProcessViewPost.php";

use OOP\Middleware;
use OOP\ProcessViewPost;

$middleware = new Middleware();
$middleware->authenticated();

$post = (new ProcessViewPost())->getPost();

if(!isset($_SESSION)) session_start();
$user = (object)$_SESSION['auth'];
?>
<body>

<?php require_once "header.php" ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="text-center mb-4">View Post</h3>


        <h5>Title: <?php echo $post->title?></h5>
        <p>Body: <?php echo $post->body?></p>
        <p>Email: <?php echo $post->email?></p>

        <div class="d-flex justify-content-end mt-3">
            <?php 
                if(($post->user_id) === $user->id){ ?>

            <a href="/nigel_php/edit-post.php?id=<?php echo $post->id; ?>" class="btn btn-primary me-2">Edit</a>
            <form action="/nigel_php/process-delete-post.php" method="DELETE">
                <input type="hidden" value="<?php echo $post->id; ?>" name="id">
                <input type="hidden" value="<?php echo $post->user_id; ?>" name="user_id">

                <button type="submit" class="btn btn-danger "> Delete Post</button>
            </form>
        
            <?php }?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

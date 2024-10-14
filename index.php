<!DOCTYPE html>
<html lang="en">

<?php 
require_once "head-tag.php"; 

require_once "./OOP/Middleware.php";
require_once "./OOP/ProcessIndex.php";

use OOP\Middleware;
use OOP\ProcessIndex;

(new Middleware())->authenticated();
$posts = (new ProcessIndex())->getPosts();

?>

<body>
    <?php require_once "header.php" ?>
    <h1>Home Page</h1>

    <div class="container-fluid">
        <div class="list-group">
            <?php foreach ($posts as $post) { ?>
                <div class="card">
                    <h5 class="card-header">
                    <?php echo $post->email; ?>
                </h5>
                <div class="card-body">
                <h5 class="card-title">
                    <?php echo $post->title; ?>
                </h5>
                    <p class="card-text">
                        <?php echo $post->body; ?>
                    </p>
                    <a href="/day1/view-post.php/?id=<?php echo $post->id; ?>" class="btn btn-primary" aria-current="true">View Post</a>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <?php echo $post->updated_at; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    <?php require_once "footer.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
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

<?php require_once "header.php"; ?>

<div class="container mt-4">
    <h1>Home</h1>

    <div class="list-group mt-3">

        <?php foreach($posts as $post){ ?>
            <a href="/nigel_php/view-post.php/?id=<?php echo $post->id?>" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">
                        <?php echo $post->title; ?></h5>
                    <small class="text-muted">
                        <?php echo $post->updated_at;?>
                    </small>
                </div>
                <p><?php echo $post->body;?> </p>
                <small class="text-muted">
                    <?php echo $post->email;?>
                </small>
            </a>

        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz

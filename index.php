<!DOCTYPE html>
<html lang="en">
    <?php
    require_once 'head-tag.php';

    require_once "./OOP/Middleware.php";
    require_once "./OOP/ProcessIndex.php";

    use OOP\Middleware;
    use OOP\ProcessIndex;

    (new Middleware())->authenticated();
    $posts = (new ProcessIndex())->getPosts();

    ?>
<body>
    
    <?php
    require_once 'header.php';
    ?>
    <?php 
        foreach ($posts as $post) {
    ?>
    <a href="/phpinventive/view-post.php/?id=<?php echo $post->id; ?>" class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 relative">
        <div class="absolute top-3 right-3 text-sm text-gray-500"><?php echo $post->updated_at?></div>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mt-2"><?php echo $post->title?></h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"><?php echo $post->email?></p>
    </a>


    <?php
        }
    ?>
    <?php
    require_once 'footer.php';
    ?>


</body>
</html>
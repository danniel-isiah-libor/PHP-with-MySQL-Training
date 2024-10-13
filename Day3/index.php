<!DOCTYPE html>
<html lang="en">

<?php 
    require_once("head-tag.php"); 
    require_once("Middleware.php");
    require_once("Database.php");
    require_once("ProcessIndex.php");

    use Day3\Middleware;
    use Day3\Database;
    use Day3\ProcessIndex;
    (new Middleware())->authenticated();
   $posts =  (new ProcessIndex())->getPosts();

?>

<body>
    <?php
    require_once("header.php")
    ?>

    <h1>Home</h1>

    <Center>
       <?php foreach ($posts as $post){ ?> 
                <div class="card text-center" style="background-color: lightgray; width:40%;">
                <div class="card-header"><?php echo $post->title ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->subtitle ?></h5>
                    <p class="card-text"><?php echo $post->body ?></p>
                     <a href=viewpost.php?id=<?php echo $post->blogid ?> class="btn btn-primary" data-mdb-ripple-init>View Post</a> 

                </div>
                <div class="card-footer text-muted">Created By : <?php echo $post->name ?> </div>
                </div>
                <br>
            
            <?php } ?>
    
            </Center>
    <?php
    require_once("footer.php")
    ?>
    <script   script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>


</html>
<!DOCTYPE html>
<html lang="en">
<?php 
    include_once("head-tag.php");

    require_once("Middleware.php");
    require_once("ProcessViewPost.php");

    use Day3\Middleware;
    use Day3\ProcessViewPost;

    (new Middleware())->authenticated();

    $post =  (new ProcessViewPost())->getPost();
?>

<body>
    <?php include_once("header.php"); ?>
    
    <Center>
       
                <div class="card text-center" style="background-color: lightgray; width:40%;">
                <div class="card-header"><?php echo $post->title ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->subtitle ?></h5>
                    <p class="card-text"><?php echo $post->body ?></p>                     
                </div>
                <div class="card-footer text-muted">Created By : <?php echo $post->name ?> </div>
                </div>
                <br>
            
           
    
            </Center>
    


    <?php include_once("footer.php"); ?>
</body>
</html>
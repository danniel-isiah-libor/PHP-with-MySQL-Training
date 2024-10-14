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

    

    <Center>
    <p style="font-size:18px; font-style:bold; text-align:center " >Home</p>

       <?php foreach ($posts as $post){ ?> 
                <div class="card text-center" style="background-color: lightgray; width:40%;">                    
                <div class="card-header"><?php echo $post->title ?></div>
                <div class="card-body">
                    <img src="uploads/<?php echo $post->photo ?>" alt="No Photo" height="250px" width="250px;" />
                    <h5 class="card-title"><?php echo $post->subtitle ?></h5>
                    <p class="card-text"><?php echo $post->body ?></p>
                     <a href=viewpost.php?id=<?php echo $post->blogid ?> class="btn btn-primary" data-mdb-ripple-init>View Post</a> 
                     <hr>
                     <?php
                        $userId = (object)$_SESSION['auth'];
                        if ($post->userid == $userId->id) 
                            { ?>
                                <form action="editpost.php" method="PUT">
                                    <input type="hidden" name="id" id="id" value="<?php echo $post->blogid ?>">
                                    <input type="submit" value="Edit">
                                </form>
                                
                                <form action="process-delete-post.php" method="DELETE">
                                    <input type="hidden" name="id" id="id" value="<?php echo $post->blogid ?>">
                                    <input type="submit" value="Delete">
                                </form>

                               
                    <?php   } ?>
                     

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
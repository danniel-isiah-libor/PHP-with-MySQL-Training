<!DOCTYPE html>
<html lang="en">
<?php
include_once("head-tag.php");

require_once("Middleware.php");
require_once("ProcessViewPost.php");
require_once("ProcessViewComments.php");

use Day3\Middleware;
use Day3\ProcessViewPost;
use Day3\ProcessViewComments;

(new Middleware())->authenticated();


$post =  (new ProcessViewPost())->getPost();


$comments  = (new ProcessViewComments())->getComments();

?>

<body>
    <?php include_once("header.php"); ?>

    <Center>

        <div class="card text-center" style="background-color: lightgray; width:40%;">
            <div class="card-header"><?php echo $post->title ?></div>
            <div class="card-body">
            <img src="uploads/<?php echo $post->photo ?>" alt="No Photo" height="250px" width="250px;" />
                <h5 class="card-title"><?php echo $post->subtitle ?></h5>
                <p class="card-text"><?php echo $post->body ?></p>
            </div>
            <div class="card-footer text-muted">Created By : <?php echo $post->name ?> </div>
            <br>
            <div>
                <?php
                    $userId = (object)$_SESSION['auth'];
                    if ($post->userid == $userId->id) 
                        { ?>
                            <!-- <a class="btn btn-primary" href="editpost.php?id=<?php echo $post->blogid ?>"> Edit </a> -->
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
        </div>
    </Center>                        


    
    <div style="width: 60%;">           
        <hr>
        <h6>Comments</h6>
        <hr>
        <?php foreach ($comments as $comment) { ?>
            <div>
                <div><?php echo $comment->Comment;   ?></div>
                <hr>
            </div>
        <?php } ?>

        <form action="process-addcomment.php" method="POST">
            <div class="row mb-3">
                <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="comment" name="comment">
                    <?php
                    echo "<p style='color:red'>" . implode(',', $errors['comment'] ?? []) . "</p>";
                    ?>
                </div>
                <input type="hidden" name="blogid" id="blogid" value="<?php echo $_GET['id'] ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Save Comment</button>
        </form>
    </div>
    
    <?php include_once("footer.php"); ?>
</body>

</html>
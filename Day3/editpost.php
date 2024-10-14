<!DOCTYPE html>
<html lang="en">
<?php
require_once("head-tag.php");
require_once("Middleware.php");
require_once("ProcessViewPost.php");

use Day3\Middleware;
use Day3\ProcessViewPost;

    

    

(new Middleware())->authenticated();


$post =  (new ProcessViewPost())->getPost();


$errors = $_SESSION['errors'] ?? [];
?>

<body>
    <?php
    require_once("header.php");
    ?>
    <br>
    <Center>
        <div style="size:60%;">
            <hr>
            <h3> Edit Post </h3>
            <hr>
            <form style="width: 26rem;" action="process-editpost.php" method="POST">
                <!-- Name input -->
                 <input type="hidden"  id = "id" name="id" value="<?php echo $post->blogid ?>" />
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $post->title ?>" />
                    <label class="form-label" for="title">Title</label>
                    <?php
                            // var_dump($errors);
                            // die();
                            echo "<p style='color:red'>" . implode(',',$errors['title'] ?? []) . "</p>";
                        ?>
                </div>

                <!-- Email input -->
                <!-- <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form4Example2" class="form-control" />
            <label class="form-label" for="form4Example2">Email address</label>
        </div> -->

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="subtitle" name="subtitle" class="form-control" value="<?php echo $post->subtitle ?>" />
                    <label class="form-label" for="subtitle">Sub-title</label>
                </div>

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                
                    <textarea class="form-control" id="body" name="body" rows="4"> <?php echo $post->body ?> </textarea>
                    <label class="form-label" for="body">BODY</label>
                    <?php
                            echo "<p style='color:red'>" . implode(',',$errors['body'] ?? []) . "</p>";
                        ?>
                </div>

                <!-- Checkbox -->
                <!-- <div class="form-check d-flex justify-content-center mb-4">
            <input
                class="form-check-input me-2"
                type="checkbox"
                value=""
                id="form4Example4"
                checked />
            <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
            </label>
        </div> -->

                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Update</button>
            </form>
        </div>
    </Center>


    <?php
    require_once("footer.php");
    ?>
    <script script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
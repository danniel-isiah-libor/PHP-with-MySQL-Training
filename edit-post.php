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

$middleware->author($post->user_id, $post->id);
?>

<body>

    <?php require_once "header.php"; ?>

    <h1>Edit Post</h1>

    <form action="/playground/process-edit-post.php" method="PUT">
        <input type="hidden" value="<?php echo $post->id; ?>" name="id">
        <input type="hidden" value="<?php echo $post->user_id; ?>" name="user_id">

        <div class="container">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="<?php echo $post->title; ?>" name="title" type="text" class="form-control" id="title" required>
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['title'] ?? []) . "</p>";
                ?>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" class="form-control" id="body" required><?php echo $post->body; ?></textarea>
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['body'] ?? []) . "</p>";
                ?>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php require_once "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
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

$middleware->author($post->user_id, $post->id);


?>
<body>

<?php require_once "header.php" ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Edit Post</h3>
        <form action="/nigel_php/process-edit-post.php" method="PUT">
          <input type="hidden" value="<?php echo $post->id; ?>" name="id">
          <input type="hidden" value="<?php echo $post->user_id; ?>" name="user_id">
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
            <button type="submit" class="btn btn-primary w-100">Add Post</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

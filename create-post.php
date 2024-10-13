<!DOCTYPE html>
<html lang="en">

<?php
    require_once "head-tag.php";
    require_once "./OOP/Middleware.php";

    use OOP\Middleware;

    (new Middleware())->authenticated();

    $errors = $_SESSION['errors'] ?? [];
?>

<body>

    <?php require_once "header.php"?>
    

    <div class="container">
    <form class="space-y-4 md:space-y-6" action="/phpinventive/process-create-post.php" method="POST">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="title" name="title" id="title" placeholder="Title" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" >
                        <?php 
                            if (isset($errors['title'])) {
                                echo "<p class='text-red-900'>" . implode(',', $errors['title']) . "</p>";
                            }
                        ?>
                    </div>
                    <div>
                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Body</label>
                        <textarea name="body" id="body" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"></textarea>
                        <?php 
                            if (isset($errors['body'])) {
                                echo "<p>" . implode(',', $errors['body']) . "</p>";
                            }
                        ?>
                    </div>
                    <button type="submit" class="w-full text-black bg-gray-200 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                </form>
    </div>

    <?php require_once 'footer.php'; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">


<?php
require_once "head-tag.php";
require_once "Middleware.php";
use OOP\Middleware;

(new Middleware())->authenticated();
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: post.php");
    die();
}
?>

<?php
require_once "head-tag.php";
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    die();
}
?>

<body>
    <?php require_once "header.php"; ?>

    <h1>Home Page</h1>

    <?php require_once "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
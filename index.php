<!DOCTYPE html>
<html lang="en">
    <?php
    require_once 'head-tag.php';

    if (!isset($_SESSION)) session_start();

    if (!isset($_SESSION['auth'])) {
        header("Location: login.php");
        die();
    }

    ?>
<body>
    
    <?php
    require_once 'header.php';
    var_dump($_SESSION['auth']);
    ?>

    <h1 class="mt-4">Home Page</h1>


    <?php
    require_once 'footer.php';
    ?>


</body>
</html>
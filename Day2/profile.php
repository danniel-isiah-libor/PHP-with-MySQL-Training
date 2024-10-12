<!DOCTYPE html>
<html lang="en">
<?php 

    require_once("head-tag.php"); 

    if (!isset($_SESSION)) session_start();

    if (!isset($_SESSION['auth'])) {
        header("Location: login.php");
    }
?>

<body>
<?php
    require_once("header.php")
    ?>

    <h1>Profile</h1>

    <?php
    require_once("footer.php")
    ?>
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>
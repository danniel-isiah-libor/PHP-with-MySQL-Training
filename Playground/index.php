<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-鷓-hwvRIl1foUnEYA1zTmnCwOpb697vEOeJaHzULl9F0N1Sk4vFSzTkFPzU1mSTm" crossorigin="anonymous">

  <link rel="stylesheet" href="your-custom-styles.css">  </head>
<body>

<?php
// index.php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit();
}

?>

<?php include_once "header.php"; ?>

<?php include_once "navbar.php"; ?>

<?php include_once "footer.php"; ?>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
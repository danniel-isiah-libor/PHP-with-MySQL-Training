<!DOCTYPE html>
<html lang="en">

<?php
require_once "head-tag.php";

if (!isset($_SESSION)) session_start();

if (isset($_SESSION['auth'])) {
    header("Location: index.php");
    die();
}
?>

<body>
    <h1>Login Page</h1>

    <form action="/playground/process-login.php" method="POST">
        <div class="container">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>

    <a href="/playground/register.php">Register here</a>

    <?php require_once "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
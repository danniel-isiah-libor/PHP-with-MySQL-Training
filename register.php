<!DOCTYPE html>
<html lang="en">

<?php
require_once "head-tag.php";
require_once "./OOP/Middleware.php";

use OOP\Middleware;

(new Middleware())->guest();

$errors = $_SESSION['errors'] ?? [];
?>

<body>
    <h1>Register Page</h1>

    <form action="/playground/process-register.php" method="POST">
        <div class="container">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" required>
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['name'] ?? []) . "</p>";
                ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com" required>
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['email'] ?? []) . "</p>";
                ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" required>
                <?php
                echo "<p style='color: red'>" . implode(',', $errors['password'] ?? []) . "</p>";
                ?>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form>

    <a href="/playground/login.php">Already have account? Login here</a>

    <?php require_once "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
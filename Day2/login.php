<!DOCTYPE html>
<html lang="en">
<?php 
    require_once("head-tag.php"); 

    if(!isset($_SESSION)) session_start();
    $errors = $_SESSION['errors'] ?? [];
?>

<body>

    <h1>Login Page</h1>
    <center>
        <div style="width: 60%;">
            <!-- <form action="process-login.php" method="POST">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form> -->
            <form action="process-login.php" method="POST">
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label" for="email">Email address</label>
                    <?php
                            echo "<p style='color:red'>" . implode(',',$errors['email'] ?? []) . "</p>";
                        ?>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="password">Password</label>
                    <?php
                            echo "<p style='color:red'>" . implode(',',$errors['password'] ?? []) . "</p>";
                        ?>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="register.php">Register</a></p>

                    <!-- <p>or sign up with:</p>
                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button> -->
                </div>
            </form>


        </div>
        <br>
        <hr>
        New User Please <a href="register.php"> Register Here </a>
        <hr>
    </center>




    <?php
    require_once("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
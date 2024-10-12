<!DOCTYPE html>
<html lang="en">
<?php require_once("head-tag.php"); ?>

<body>

    <h1>Login Page</h1>
    <center>
        <div style="width: 60%;">
            <form action="process-login.php" method="POST">
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
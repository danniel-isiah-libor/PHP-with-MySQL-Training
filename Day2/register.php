<!DOCTYPE html>
<html lang="en">
<?php require_once("head-tag.php"); 

if(!isset($_SESSION)) session_start();
$errors = $_SESSION['errors'] ?? [];
?>

<body>
    <?php
    require_once("header.php")
    ?>

    <h1>Register</h1>
    <center>
        <div style="width: 60%;">
            <form action="process-register.php" method="POST">
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                        <?php
                            echo "<p style='color:red'>" . implode(',',$errors['name'] ?? []) . "</p>";
                        ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                        <?php
                            echo "<p style='color:red'>" . implode(',',$errors['email'] ?? []) . "</p>";
                        ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">
                        <?php
                            echo "<p style='color:red'>" . implode(',',$errors['password'] ?? []) . "</p>";
                        ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="confirmPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmpassword">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        Already have an Account? <a href="login.php"> Login Here</a>
    </center>

    <?php
    require_once("footer.php")
    ?>
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php require_once "head-tag.php"?>

<body>

    <h1 class="text-center">LOGIN PAGE</h1>
    
    
    <div class="container">
        <form action="/training/process-login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
           
            <button type="submit" class="btn btn-primary ">Submit</button>
        </form> 
        <a href="./registration.php">Registration</a>
    </div>

    <?php require_once "footer.php"?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
<!DOCTYPE html>
<html lang="en">
<?php include_once "head-tag.php";

  if(!isset($_SESSION)) session_start();

  $errors = $_SESSION['errors']?? [];
  
  if(isset($_SESSION['auth'])){
    header('Location: index.php');
    die();
  }



  // var_dump($errors);

?>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div style="width: 300px;">
      <h2 class="text-center mb-4">Login</h2>
      <form action="/nigel_php/process-register.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" name="name" class="form-control" id="name" placeholder="Zyjeah Ganda">
          <?php 
              echo "<p style='color:red'>" . implode(', ', $errors['name'] ?? []) . "</p>";
          ?>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com">
          <?php 
          
            echo "<p style='color:red'>" . implode(', ', $errors['email'] ?? []) . "</p>";
          
          ?>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password required">
          <?php 
          
          // echo "<p style='color:red'>" . implode(', ', $errors['password'] ?? []) . "</p>";
          
          ?>
        </div>
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
        </div>
        
        <a href="/nigel_php/login.php">Login Here</a>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

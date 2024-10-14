<!DOCTYPE html>
<html lang="en">
<?php
require_once("head-tag.php");
require_once("Middleware.php");


use Day3\Middleware;

(new Middleware())->authenticated();

$errors = $_SESSION['errors'] ?? [];
?>

<body>
    <?php
    require_once("header.php");
    ?>
    <br>
    <Center>
    <div style="width: 60%;">
            <form action="process-addcomment.php" method="POST">
                <div class="row mb-3">
                    <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="comment" name="comment">
                        <?php
                            echo "<p style='color:red'>" . implode(',',$errors['comment'] ?? []) . "</p>";
                        ?>

                        
                    </div>
                    
                    
                    <input type="hidden" name = "blogid" id = "blogid" value="<?php echo $_GET['id'] ?>"/>
                </div>             
                <button type="submit" class="btn btn-primary">Save Comment</button>
            </form>
        </div>
    </Center>


    <?php
    require_once("footer.php");
    ?>
    <script script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
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
        <div style="size:60%;">
            <hr>
            <h3> Create Post </h3>
            <hr>
            <form style="width: 26rem;" action="process-createpost.php" method="POST" enctype="multipart/form-data">
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="title" name="title" class="form-control" />
                    <label class="form-label" for="title">Title</label>
                    <?php
                            // var_dump($errors);
                            // die();
                            echo "<p style='color:red'>" . implode(',',$errors['title'] ?? []) . "</p>";
                        ?>
                </div>

                
                <div data-mdb-input-init class="form-outline mb-4"> -->
                    <input type="file" id="photo" name="photo" class="form-control" />
                    <label class="form-label" for="form4Example2">Photo</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="subtitle" name="subtitle" class="form-control" />
                    <label class="form-label" for="subtitle">Sub-title</label>
                </div>

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" id="body" name="body" rows="4"></textarea>
                    <label class="form-label" for="body">BODY</label>
                    <?php
                            echo "<p style='color:red'>" . implode(',',$errors['body'] ?? []) . "</p>";
                        ?>
                </div>

                <!-- Checkbox -->
                <!-- <div class="form-check d-flex justify-content-center mb-4">
            <input
                class="form-check-input me-2"
                type="checkbox"
                value=""
                id="form4Example4"
                checked />
            <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
            </label>
        </div> -->

                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Create</button>
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
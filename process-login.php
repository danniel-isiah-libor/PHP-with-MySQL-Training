<?php
    //var_dump($_POST);
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<br> Email : $email , Pwd : $password";

    header("Location: index.php");
?>
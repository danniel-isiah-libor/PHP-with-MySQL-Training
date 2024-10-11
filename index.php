<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        echo "<h2> Hello World </h2>";
        $color = "red";
        $COLOR = "blue";
        //one line comment

        /**
         * multiline comment
         * multiline comment
         * multiline comment
         */

        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";

        $cars = ["Honda", "toyota", "volvo"];
       
        echo "$cars[0] - $cars[1]. $cars[2]";
        echo "<br>";
        var_dump($cars);
        ?>
    </h1>
</body>

</html>
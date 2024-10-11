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

        echo "<br>";
        echo strlen("123 456");
        echo "<br>";
        echo str_word_count("HEllo Word");
        echo "<br>";
        echo strpos("Testing lang", "lang");

        // Cast float to int
        echo "<br>";
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";
        $float_cast = (float)$int_cast;
        echo $float_cast;
        echo "<br>";
        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;

        echo "<br>";
        echo "<br>";
        $grade = 74;
        $remarks = "";
        if ($grade < 0 || $grade > 100) {
            $remarks = "Invalid Grade";
        } else {
            if ($grade >= 75) {
                if ($grade >= 90) {
                    $remarks = "Excellent";
                } else {
                    $remarks = "Passed";
                }
            } else {
                if ($grade <= 70) {
                    $remarks = "Failed";
                } else {
                    $remarks = "Incomplete";
                }
            }
        }

        echo $remarks;
        echo "<br>";
        $isPassed = ($grade >= 75) ? "Passed" : "Failed";
        echo $isPassed;

        echo "<br>";
        $status  = "paid";
        switch ($status) {
            case 'active' or 'paid':
                echo "Welcome to Dashboard";
                break;
            case 'pending':
                echo "Please verify your email";
            default:
                echo "Invalid account";
                break;
        }

        $colors = array("red","green","blue");
        foreach($colors as $x){
            echo "<br> $x";
        }
        echo "<br>";
        $size = 25;
        for ($x=1; $x<=$size; $x++){
            for($y=1; $y<=$x; $y++){
                echo "*";
            }
            echo "<br>";
        }

        for($x=$size; $x>=1; $x--)
        {
            echo str_repeat("*",$x);
            echo "<br>";
        }
        ?>
    </h1>
</body>

</html>
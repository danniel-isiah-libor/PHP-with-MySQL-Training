<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $name = "John Doe"; 
    /**
     * a
     * b
     * c
     */
    # $Name = "Jane Doe";

    // // Concatenation
    // $firstName = "John";
    // $name = "$firstName Doe";

    // // Reassigning
    // $name = "John Doe";
    // $name = "Jane Doe";

    // $age = $grade = 75;

    // $grade = 20;

    // echo $age;

    // echo $name;
    // echo "<br>";
    // print $Name;

    // Array data type
    // $cars = ["honda", "toyota", "ford"];
    // var_dump($cars[1]);
    // echo $cars[1];

    // Float data type
    // $age = 20.5;
    // var_dump($age);

    // $isPass = true;
    // $isPass = null;
    // var_dump($isPass);

    // $firstName = "John";
    // echo "$firstName Doe";
    // echo "<br>";
    // echo '$firstName Doe';

    // $name = "John Doe";
    // var_dump(strlen($name));

    // var_dump(str_word_count("Hello World"));
    // var_dump(strpos("Hello world!", "world"));

    // $x = "Hello World!";
    // echo strrev($x);

    // $x = "                Hello World!                          ";
    // echo trim($x);

    $x = "Hello World!";
    // $y = explode(" ", $x);

    // var_dump($y[0]);

    // $x = "$x We are the so-called \"Vikings\" from the north.";
    // echo $x;

    // $x = "20.50";
    // $y = 80.80;

    // echo $x + $y;

    // var_dump(PHP_INT_MAX);

    // $x = 1.9e411;
    // var_dump(is_infinite($x));

    // $x = "John";
    // $x = (array)$x;
    // var_dump($x);

    // $array = [
    //     "name" => "John Doe",
    //     "age" => 20,
    //     "isPass" => true
    // ];
    // $array = (object)$array;
    // var_dump($array);

    // $x = 20.6983;
    // $round = round($x, 3);

    // echo rand(10, 100);

    // const MYCAR = "Volvo";
    // echo MYCAR;

    // $x = 20;
    // $y = 10;

    // var_dump($x <=> $y);

    /**
     * 74 below = failed
     * 75 above = passed
     * 90 above = excellent
     */
    // $grade = 0;

    // if ($grade >= 90) {
    //     echo "Excellent";
    // } else if ($grade >= 75) {
    //     echo "Passed";
    // } else {
    //     echo "Failed";
    // }

    // $x = ["honda", "toyota", 'ford'];
    // $y = ["chevy", "mitshubishi", "volvo", "test"];

    // var_dump($x + $y);

    // $isPassed = (true) ? ((true) ? "passed" : "failed") : "failed";

    // $database = 0;
    // $age = $database ?? 20;

    // echo $age;

    // $status = "paid";

    // switch ($status) {
    //     case 'active' or 'paid':
    //         echo "Welcome to dashboard";
    //         break;

    //     case 'pending':
    //         echo "Please verify your email";
    //         break;

    //     default:
    //         echo "Invalid account";
    //         break;
    // }

    // $x = 1;
    // do {
    //     echo "$x <br>";
    //     $x++;
    // } while ($x < 6)

    // $count = 5;
    // for ($x = 1; $x <= $count; $x++) {
    //     $result = "";
    //     for ($y = 1; $y <= $x; $y++) {
    //         $result .= "*";
    //         // $result = $result . "*";
    //     }
    //     $result .= "<br>";
    //     echo $result;
    // }
    // for ($x = 1; $x <= $count; $x++) {
    //     $result .= str_repeat('*', $x) . "<br>";
    // }
    // echo $result;

    $profile = "Dan";

    // $cars = [
    //     [
    //         "name" => $profile ?: "John"
    //     ],
    //     [
    //         "name" => "Jane"
    //     ]
    // ];

    // echo $cars[0]["name"];

    // $array = [1, 2, 3];
    // // $array[] = [4, 5];
    // array_push($array, [4, 5]);
    // var_dump($array);

    // $cars = array("Volvo", "BMW", "Toyota");
    // array_splice($cars, 0, 2);
    // var_dump($cars);

    // function calculateGrades($profile = [])
    // {
    //     $x = 1;
    //     $y = 1;

    //     echo $profile;

    //     return $x + $y;
    // }

    // $student = [
    //     'name' => 'John',
    //     'age' => 20,
    //     'address' => 'Philippines'
    // ];
    // $grades = calculateGrades($student);

    // echo $grades; // sum

    $globalScope = "Jane Doe";
    $localScope = null;

    $count = 1;

    echo __LINE__;
    echo "<br>";
    require "not_found.php";
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    include_once "profile.php";
    echo "<br>";
    echo __LINE__;
    echo "<br>";

    echo $globalScope . "<br>";
    getProfile();
    getProfile();
    getProfile();
    echo $globalScope . "<br>";
    echo $count;

    echo $localScope;
    ?>
</body>

</html>
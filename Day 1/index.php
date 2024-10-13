<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            /**
            //  * This is a multiline comment
            //  * 
            //  */
            // echo "<h1>Hello World</h1>";
            // $name = "Mark Vincent R. Jungco";
            // $Name = "Jane Doe";
            // echo $Name;

            // $cars = ["Volvo", "BMW", "Toyota"];
            
            // var_dump(strlen ($name)); //kasama si space
            // str_word_count($name); 
            // strpos($name, "Vincent"); //kasama si space
            // // strtolower($name);
            // // strtoupper($name);

            // $grade = 75;

            // if ($grade<=74) {
            //     echo "Failed";
            // } elseif ($grade>=75 && $grade<=89) {
            //     echo "Passed";
            // } else {
            //     echo "excellent";
            // }

            // $result = "";

            // $noofbase = 20; 

            // for($x = 1; $x <= $noofbase; $x++){
            //     for($y = 1; $y <= $x; $y++){
            //         $result = $result . "* ";
            //     }
            //     $result = $result . "<br>";
            // }

            // echo $result;


            $globalScope = "Jane Doe";
            $count = 1;

            include "profile.php";

            echo $globalScope . "<br>";

            getProfile();
            getProfile();
            getProfile();
        ?>
</body>
</html>
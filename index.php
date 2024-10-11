<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <?php
        // $name = "Sample Variable"; single comment
        
        /**    - multiple lines comments
         * $Name = "Sample Variable 2";
         * $Name = "Sample Variable 2";
         * echo $Name;
         *  */ 
        
        // $Name = "Sample Variable 2";
        // echo $Name;

        // $cars = ["honda","toyota","ford"];
        // echo $cars[0];
        // echo "<br>";
        // var_dump($cars[0]);

        //using double quote, you can make concatenation while not in single quote

        // $name = "John Doe";
        // var_dump(strlen($name));

        // $greeting = "Hello World";
        // echo str_word_count($greeting);
        // echo "</br>";
        // var_dump($greeting);
        // echo "</br>";
        // var_dump(strpos($greeting,"World"));

        // $x = "We are the so-called \"Vikings\" from the north.";

        // // Cast float to int
        // $x = 23465.768;
        // $int_cast = (int)$x;
        // echo $int_cast;
        // echo "<br>";
        // // Cast string to int
        // $x = "23465.768";
        // $int_cast = (int)$x;
        // echo $int_cast;


    // $array = [
    //     "name" => "Joe Ramos",
    //     "age" => 20,
    //     "isPass" => true
    // ]

    // $array = (object) $array;
    // var_dump($array);

//     $a = array("Volvo", "BMW", "Toyota"); // indexed array
// $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
// $a = (object) $a;
// $b = (object) $b;
    
// $x = 20.6893;
// $round = round($x,3);  

// echo $round;

// $env = parse_ini_file('.env');
// $database


// $grade = 5;

// if ($grade <= 70) {
//      echo "Failed";
// }elseif ($grade >= 90){
//     echo "Excellent";
// }else{  
//     echo "Passed";
// }

// $isPassed = (false) ? "passed" : "failed";
// var_dump($isPassed);

// $database = NULL;
// $age = $database ?? 20;

// echo $age;

// $status ="paid";

// switch ($status) {
//     case 'active' || 'paid':
//         echo "Welcome";
//         break;

//     case 'pending':
//         echo "Please verify your account";
//         break;
        
//     default:
//     echo "Invalid Account";
    
//     }

// $i = 1;
// while ($i < 6) {
// echo "$i <br>";
// $i++;
// }

// $i = 1;
// do {
// echo $i;
// $i++;
// } while ($i < 6);

// for ($x = 1; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//     }

// $colors = array("red", "green", "blue", "yellow");
// foreach ($colors as $x) {
// echo "$x <br>";
// }


// $size = 25;

// for ($x = 1; $x <= $size; $x++) {
//     for($y=1; $y<=$x; $y++){
//         echo "*";
//   }
//     echo "<br>";
//  }

//  echo "<br>";

// $size = 25;

// for ($x = $size; $x >= 1; $x--) {
//     for($y=1; $y<=$x; $y++){
//         echo "*";
//   }
//     echo "<br>";
//  }

//  $size = 25;
//  $result="";

// for ($x = 1; $x <= $size; $x++) {
//     for($y=1; $y<=$x; $y++){
//         $result.= "*";
//   }
//     $result .="<br>";
//  }

//  echo $result;

// $size = 10;
// $result = "";
// for ($x = 1; $x <= $size; $x++) {
//    $result .= str_repeat('*',$x)."<br>";
//  }

//  echo $result;

 $size = 25;
 $result="";

for ($x = 1; $x <= $size; $x++) {
    $result ="";
    for($y=1; $y<=$x; $y++){
        $result.= "*";
  }
    echo "$result <br>";
 }


 $profile = "Joe";
 $cars = [
    [
        "name" => $profile ?? "Jose"
    ],
    [
        "name" => "Maryann"
    ];
       
    echo $cars[0]["name"];
    ];

?>
        

    
    
</body>

</html>
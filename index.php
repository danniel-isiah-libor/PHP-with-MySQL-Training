<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
        // echo "<h2> Hello Nigel</h2>";
        // echo true;
        // $name = 1;
        // $name2 = 2;
        // echo ($name + $name2);

        // $name = "Nigel Pogi";
        // $Name = "Nigel Pogi padin";


        // $fullname = "$name jeah ganda";
        // $age = 21;

        // $Age = $grade = "75";

        // $grade = 10;
        //Concatination
        // $concatination = "Nigel" . "Camba";
        // echo $name;
        // echo "<br>";
        // print $Name;
        // echo "<br>";
        // echo $concatination;
        // echo "<br>";
        // echo $fullname;
        // echo "<br>";
        // echo $Age;
        // echo "<br>";
        // echo $grade;

        // $cars = ["honda"," civic", 'coz we made it'];

        // var_dump($cars[0]); //parang die dumpp
        // echo $cars[1];

        // $isPass = true;
        // $isPass = 1;

        // var_dump($isPass);

        // $name = "John Doe";
        // var_dump(strlen($name));
        // echo str_word_count("Hello world!");
        // echo strlen($name);

        // echo strpos("Hello world!", "world");
        // var_dump(strpos("Hello world!", "world"));
        // $x = "Hello world!";
        // $y = explode(" ", $x);

        // var_dump($y[0]);
        // $x = 1.9e411;
        // var_dump($x)



        // $grade = 75;

        // if($grade <= 74.99){
        //   echo "failed";
        // }elseif ($grade >= 75 && $grade <=89){
        //   echo "Passed";
        // }
        // else{
        //   echo "Excellent";
        // }

        $result = "";

        for ($x = 1; $x <= 5; $x++){

          for($y = 1; $y <= $x; $y++){
            $result = $result . " *";
          }

          $result = $result . " <br>";
        }

        echo $result;

    ?>
  
</body>
</html>
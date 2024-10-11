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

    $age = 25;
    $lmao = 30 + $age;

    $name = "Kyle";
    $Name = "Jane Doe";

    $testArray = [$age, $lmao, $name];

const failed = 70;
const passed = 75;
const excellent = 90;

$grade = 90;

if ($grade<passed) {
    echo "Failed";
} elseif ($grade>= passed and $grade<excellent) {
    echo "Passed";
} elseif ($grade>=excellent) {
    echo "Excellent";
}

echo "<br>";
echo "<br>";
echo "<br>";

$pyr = 4;
const slash  = "*";

for ( $i = 0; $i < $pyr; $i++){
    for($y = 1; $y <= $i; $y++){
echo slash;
    }
    echo slash . "<br>";
}

echo "<br>";


    echo $lmao;
    echo $name;
    echo "<br>";
    echo $Name;
    var_dump($testArray);
    echo "<br>";
    echo "<br>";


    ?>

</h1>

</body>
</html>
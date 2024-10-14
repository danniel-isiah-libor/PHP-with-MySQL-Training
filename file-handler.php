<?php

// $file = readfile('./uploads/reports.txt');

// var_dump($file);

// $file = fopen('./uploads/reports.txt', 'r');

// echo fread($file, filesize('./uploads/reports.txt'));

// $file = fgets($file);

// var_dump($file);

// Output one line until end-of-file
// while (!feof($file)) {
//     echo fgetc($file) . "<br>";
// }
// fclose($file);

$users = [
    ['name' => 'John Doe', 'age' => 30],
    ['name' => 'Jane Doe', 'age' => 20],
    ['name' => 'James Doe', 'age' => 25],
    ['name' => 'Jenny Doe', 'age' => 35],
];

$file = fopen('./uploads/attendances.csv', 'w');

$txt = 'Name,Age' . "\n";
fwrite($file, $txt);

foreach ($users as $key => $value) {
    $txt = $value['name'] . ',' . $value['age'] . "\n";
    fwrite($file, $txt);
}

fclose($file);

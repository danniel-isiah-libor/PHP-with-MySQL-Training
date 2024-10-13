<?php


function getProfile(){

    global $globalScope, $count;

    $globalScope = "John Doe";

    static $count = 1;

    $count++;

    echo $count;
}
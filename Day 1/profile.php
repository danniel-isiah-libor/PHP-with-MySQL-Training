<?php

function getProfile()
{
    global $globalScope, $count, $localScope;
    // global $count;

    $globalScope = "John Doe";

    $localScope = "Hello World";

    static $count = 1;

    $count++;

    echo $count;
}

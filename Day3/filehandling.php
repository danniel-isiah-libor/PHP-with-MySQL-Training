<?php
    // $mFile = readfile("uploads\x.txt");
    // var_dump($mFile);


    $oFile = fopen("uploads\x.txt",'r');
    echo fread($oFile, filesize('uploads\x.txt'));
    fclose($oFile);



<?php
    // $mFile = readfile("uploads\x.txt");
    // var_dump($mFile);


    $oFile = fopen("uploads\x.txt",'r');
    echo fread($oFile, filesize('uploads\x.txt'));
    fclose($oFile);


    $file = fopen("uploads/att.txt",'w');
    $txt = "VIC T \n";
    fwrite($file,$txt);

    $txt = "JOE R \n";
    fwrite($file,$txt);

    

    fclose($file);



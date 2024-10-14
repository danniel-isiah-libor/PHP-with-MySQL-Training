<?php

// readfile('/uploads/reports.txt');

$file = fopen('./uploads/reports.txt', 'r');

echo fread($file, filesize('./uploads/reports.txt'));
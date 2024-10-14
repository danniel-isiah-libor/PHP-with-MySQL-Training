<?php
    namespace Day3;

    include_once("ProcessAddComment.php");

    use day3\ProcessAddComment;

    $ProcessAddComment = new ProcessAddComment;

$ProcessAddComment
    ->authorized()
    ->validate()
    ->saveToDatabase();
   
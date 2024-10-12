<?php 

function getProfile(){
  // $name = "Nigel pogi";

  global $globalScope, $count;

  static $count = 2;

  $count++;
  echo $globalScope;
}

?>
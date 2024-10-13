<?php 

  require_once "./ProcessLogout.php";

  use OOP\ProcessLogout;

  (new ProcessLogout())->logout()->redirection();
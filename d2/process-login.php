<?php 


  if(!isset($_SESSION)) session_start();

  if(!isset($_SESSION['auth'])){
    header("Location: index.php");
    die();
  
  }
  $email = $_POST['email'];
  $password = $_POST['password'];


  $_SESSION['auth']=[
    'name' => "nigel",
    'email' => $email
  ];

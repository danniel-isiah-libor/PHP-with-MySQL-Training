<?php

$class = new ProcessRegister(); 
$class->validate();


class  ProcessRegister //extends Database
{
    function __construct()
    {
        echo "Initialization....<br>";
    }


     function validate()
    {
        echo "Validate.....<br>";
    } 

  
    function __destruct()
    {
        echo "Close connection....";
    }
}

// class Database
// {
//    public function init()
//     {

//     }
// }






?>
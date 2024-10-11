<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDSCI | Home</title>

    <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
    <?php 
    // $name = date("Y-M-d");
    // $Name = date("Y-M-d");

    // $car = ["Honda", "Toyota", "Ford"]; 

   // var_dump(strpos("Hello world!", "world"));
   //75 below is failed
   //75 above = passed
   //90 above = excellent

    //  $status = "paid";

    //  switch ($status){
    //     case 'active' or 'paid':
    //         echo "Welcome to Dashboard";
    //         break;

    //     case 'pending':
    //         echo "Please verify your email";
    //         break;
            
    //     default :
    //         echo "Invalid Account";
    //         break;
    //  }
     

    $value = 12;

    for ($i = 1; $i <= $value; $i++)
{
    echo str_repeat ("*", $i) ."<br>";
}    

    ?> 
   
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment and Decrement</title>
</head>
<body>
   <?php 
    // Increment/Decrement operators

    $increment_counter = 10; 
    $decrement_counter = 10;
    // ito yung increment counter + counter = 1   
    // Increment nag-a-add ng 1 
    // Decrement nagma-minus ng 1
    //ito naman ang shortcut
    $increment_counter++; 
    echo "Increment result: {$increment_counter} ";
    echo"<br>";
    $decrement_counter--; 
    echo "Decrement result: {$decrement_counter} "; 
    echo"<br>";
    echo"<br>";
    echo"<br>";
    //pwede mong iset kung ilan ang i-increment mo or i-de-decrement mo

    //for example ay 3; 3 ang madagdag or 3 ang minux

    $increment_counter = 10; 
    $decrement_counter = 10;
    // ito yung increment counter + counter = 1   
    // Increment nag-a-add ng 1 
    // Decrement nagma-minus ng 1
    //ito naman ang shortcut
    $increment_counter+=3; 
    echo "Increment with 3 result: {$increment_counter} ";
    echo"<br>";
    $decrement_counter-=3; 
    echo "Decrement with 3 result: {$decrement_counter} "; 

?> 
</body>
</html>

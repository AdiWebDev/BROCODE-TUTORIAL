
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmethic Operators</title>
</head>
<body>
   <?php
    //Arithmethic Operators
    // + - * / ** %

    $x = 10; 
    $y = 9; 
    $z = null; 
    echo "{$x} <br>";  
    echo "{$y} <br> <br>";  
    
    echo "Results: <br> <br>";
    $z = $x + $y;  
    echo " Addition or the + : {$x} + {$y} = {$z} <br>" ;

    $z = $x - $y;  
    echo "Subtaction or the - : {$x} - {$y} = {$z} <br>" ; 

    
    $z = $x * $y;  
    echo "Multiplication or the * : {$x} * {$y} = {$z} <br>" ; 

    $z = $x / $y;  
    echo "Division or the / : {$x} / {$y} = {$z} <br>" ;  


    $z = $x ** $y;   // 10 x 10 like that so if 10 ** 3 = 10 x 10 x 10
    echo "Power of or the ** : {$x} ** {$y} = {$z} <br>" ;  

    $z = $x % $y;   // Getting of the remainder 
    echo "Modulus or the % : {$x} % {$y} = {$z} <br>" ; 
    
?> 
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator</title>
</head>
<body>  

        <form action="2.ArithmethicOperator.php" method="post">
        <label for="x">Enter value for x: </label> 
        <input type="text" name="x"> 
        <label for="y">Enter value for y: </label> 
        <input type="text" name="y">  
        <input type="submit" name="calculate">
        </form>     
         
         
        <?php 
         $x = $_POST["x"];
         $y = $_POST["y"];   
         $result = $x % $y; 
        echo "Result: $result";
        ?>

</body>
</html>
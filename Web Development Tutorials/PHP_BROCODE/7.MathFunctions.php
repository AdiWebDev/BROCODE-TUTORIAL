
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
  <!-- Example 3 -->
    <form action="7.MathFunctions.php" method="post"> 
        <label >x:</label>
        <input type="text" name="x"></br> 
        <label >y:</label>
        <input type="text" name="y"></br>
        <label >z:</label>
        <input type="text" name="z"></br>
        <input type="submit" value="Total">
    </form>
 
    <?php  
       $x =$_POST["x"];
       $y =$_POST["y"]; 
       $z =$_POST["z"]; 
    //abs() - ang absolute ay bawat negative na nilagay mo ay ginagawa niyang positive 
        $abs = abs($x); 
        echo "abs() result: {$abs} </br>";
    //round()  - to round up 
        $round = round($x); 
        echo "round() result: {$round} </br>";
    //floor() = always round down
        $floor = floor($x); 
        echo "floor() result: {$floor} </br>";
    //ceil() = always round up 
       $ceil = ceil($x); 
        echo "ceil() result: {$ceil} </br>";

    //pow() = power like 10^3 10x10x10
        $pow = pow($x,$y); 
        echo "pow() result: {$pow} </br>";
    //sqrt() = toget the square root 
        $sqrt = sqrt($x); 
        echo "sqrt() result: {$sqrt} </br>";
     
    //max() = to get  the highest value 
        $max = max($x,$y,$z);
        echo "max() result: {$max} </br>";
        
    //min() = to get the lowest value
        $min = min($x,$y,$z);
        echo "min() result: {$min} </br>";
    //pi()  
        $pi = null;
        $pi = pi(); 
        echo "pi() result: {$pi} </br>";  
    //rand() = giving you a random numbers  
        $rand = null; 
        $rand = rand(1,10);  //pwede mo i-set sa parenthesis kung hanggang saan lang ang ibibigya na random number
        echo "rand() result: {$rand} </br> </br>"; 
     ?>
    <h5>Example</h5>
    <form action="7.MathFunctions.php" method="post">
        <label >radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form> <br>

    <?php 
    $radius = $_POST["radius"]; 
    $circumference = 2 * pi() *$radius; 
    

    // 2 * pi() * radius
    $circumference = 2 * pi() * $radius; 
    $circumference = round($circumference, 2); 
    
    // pi * radius to the power of 2
    $area = pi() * pow($radius, 2); 
    $area = round($area, 2);

    // 4 divide by 3,  multiply by pi(), multiply by radius to the power of 3
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);
    echo "Circumference * {$circumference}cm <br>";  
    echo "Are = {$area}cm^2 <br>";
    echo "Are = {$volume}cm^3 <br>"; 


    ?>
  
</body>
</html>


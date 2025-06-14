<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET and $_POST</title>
</head> 


<body>  
<!-- 
$_GET - hindi ito secure kasi nakikita ang sensitive information sa url or nadadagdag sa url mo
$_POST - ito ang mas okay dahil seure
-->
    <form action="3.$GET_$POST.php" method="post"> 
    <h5>EXAMPLE #1</h5>
     <label for="">username:</label>
     <input type="text" name="username"> <br>
     <label for="">password:</label>
     <input type="password" name="password"></br>
    <input type="submit" value="Log in">
    </form> 

    <?php
    echo "{$_POST["username"]} <br>"; 
    echo "{$_POST["password"]} <br>"; 
    ?> 

<!-- Example 2 -->
    <form action="3.$GET_$POST.php" method="post"> 
    <h5>EXAMPLE #2</h5>
     <label >quantity:</label>
     <input type="text" name="quantity"></br>
    <input type="submit" value="Total">
    </form>
 
    <?php  
        $food = "Pizza"; 
        $price = 5; 
        $quantity = $_POST["quantity"]; 
        $total = $quantity * $price; 
        echo "{$food} is \${$price} <br>";
        echo "You have orderd {$quantity} x {$food}/s <br>"; 
        // \$ is a escape para di siya basahin na function
        
        echo "Your total is: \${$total}";
    ?>  


  
</body>
</html> 



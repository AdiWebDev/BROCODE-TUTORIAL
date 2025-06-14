<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types and Variables</title>
</head>
<body>
    <?php 
   
    //variable  
    //string     
    $name= "Adi"; 
    $food ="Pizza"; 
    $email ="adi@gmail.com";  
    echo "Hello {$name} <br>";
    echo "You like {$food}";  
    echo "Your email is {$email} <br> <br>";
    
    //integer 
    $age = 21; 
    $user = 2; 
    $quantity = 4; 
    
    echo "You are {$age} years old <br>"; 
    echo "There are {$user} users online<br>"; 
    echo "You would like to buy {$quantity} items <br> <br>";
    
    //double 
    $gpa = 2.5; 
    $price = 4.99;
    $tax_rate =5.1; 

    echo "Your GPA is {$gpa} <br>";  
    echo "Your {$food} is {$price} dollars <br>"; 
    echo "The sales tax rate is {$tax_rate} % <br> <br>";  

    //boolean  
    // hindi lilitaw ang salitang true or false 
    // output lang pag true ay 1, pag false ay 0 
    //ginagamit lang to for if statement or loop
    $onlinetrue = true; 
    $onlinefalse = false; 
    echo"Online status: {$onlinetrue}<br>";
    echo"Online status: {$onlinefalse}<br> <br>" ; 
    //Math 
    echo"You have ordered {$quantity} x {$food} <br>";  
    $total = $quantity * $price;
    echo "Your total is: {$total}";
?>
</body>
</html>
 



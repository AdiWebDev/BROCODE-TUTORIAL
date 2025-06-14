<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop Statement </title>
</head> 
<!-- for loop = repeat come code a certain # of times -->
<body> 
    <h2>Exmple 1: Decrement</h2>
    <?php
    for($i = 10; $i>2; $i-=2){
        echo $i ."<br>";
     }
    ?> 
    <h2>Example 2: Enter a number and the loop will count up to the number you input</h2>
    <form action="8.ForLoop.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form> 

    <?php 
    
        $counter = $_POST["counter"];

        for($i = 1;$i <= $counter; $i++){ 
            echo $i . "<br>";
        }    
    ?> 
    <h2>Example 3: Enter  a number to set the countdown</h2>
     <form action="8.ForLoop.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form> 

    <?php 
    
        $counter = $_POST["counter"];

        for($i = $counter;$i > 0; $i--){ 
            echo $i . "<br>";
        }    
    ?>      
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <!-- Logical operators = combie conditional statements 
        IF(condition1 && condition2
        
        && = True if both conditions are true
        || = True if at least one condition is true
        ! = Ture if false. False if true
        --> 
     <h1>This is the && and || example </h1>
    <form action="6.LogicalOperators.php" method="post">
        <label>Temperature: </label>
        <input type="text" name="temp"> 
        <input type="submit" value="ENTER">
    </form>
    <?php 
        $temp = $_POST["temp"];
   
        if($temp >=0 && $temp <=30) { 
            echo "Result: The weather is good. <br>"; 
        }
        else{ 
            echo " Result: The weather is bad. <br>";
        }
    ?> 

    <h1>This is the ! example </h1>
    <?php  
        echo " \$cloudy = false; <br>";
        $cloudy = false;
   
        if(!$cloudy){ 
            echo "Result: It's sunny."; 
        }
        else{ 
            echo " Result: It's cloudy.";
        }
    ?>

    <h1>Exercise about voting</h1>
    <?php 
        $age = 18; 
        $citizen = false; 
        echo "<h3> Example 1 using && only </h3>";
        if($age>= 18 && $citizen) { 
            echo "Result if you are 18 above AND citizen: You can vote</br>";
        }
        else{ 
            echo "Result if you are not 18 above AND not citizen: You can not vote</br>";
        }

       echo "<h3> Example 2 using ! and ||  </h3>";
        if(!$age>= 18 || !$citizen) {  
            echo "Result if you are not 18 above OR  you are not citizen: You can not vote</br>";
        
        }
        else{ 
            echo "Result if you are 18 OR Citizen: You can vote</br>";
        } 

        echo "<h3> Sell movie tickets </h3>";
        $child = false; 
        $senior = false;
        $ticket = null; 

        if($child || $senior){ 
            $ticket = 10; 

        } 
        else { 
            $ticket = 15; 
        } 
        echo "The ticket price is \${$ticket}" 

    ?>


    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement Condition</title>
</head>
<body> 
    <form action="5.IfStatement.php" method="post">
    <label>AGE:</label> 
    <input type="text" name="age">
    <input type="submit" value="ENTER">
    </form>
    
    
    <?php 
        $age = $_POST["age"]; 
        if($age >= 100){ 
        
            echo "You are too old to enter this site";
        } 
        elseif($age<=0){ 
            echo "The was not a valid age";
        }
        elseif($age >= 18){ 
            echo "You may enter this site"; 
        }
        else{ 
            echo "You must be 18+ to enter ";
        }
    ?>
    
    <h5>Example 2: Boolean</h5>
    <!-- pwede rin siya sa boolean -->
   <?php  
        echo "Adult = true <br>";
        $adult = true; 
        if($adult == true){ 
            echo "Result: You may enter this site <br>"; 
        }
        else{
            echo "You must be an adult to enter";
        }  
   ?> 

   <!--Calcuting somebody's pay including overtime --> 
   <h5>Exercise: Calculating somebody's pay including overtime</h5>
    <form action="5.IfStatement.php" method="post">
        <label>Hours: </label>
        <input type="text" name="hours"> 
        <label>Rate: </label>
        <input type="text" name="rate"> 
        <input type="submit" value="Calculate"> 
    </form>
    
    <?php 
        $hours = $_POST["hours"]; 
        $rate = $_POST["rate"];
        $weekly_pay = null;

        if($hours <= 0){ 
            $weekly_pay = 0; 
        }
       elseif($hours <= 40){ 
            $weekly_pay = $hours * $rate; 
        }
        else{ 
            $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
        }
        echo "You made \${$weekly_pay} this week";
    ?>

</body>
</html>


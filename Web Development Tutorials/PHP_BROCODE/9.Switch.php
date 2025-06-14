<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <!-- switch = replacement to using many elseif statements 
                  more efficient, less code to write -->
    <form action="9.Switch.php" method="post">
 <h1> Example 1 : This is the swtich</h1>
    <label>Grade Equivalent:</label>
      <input type="text" name="grade">
      <input type="submit" value="Enter">
      <br>
    </form>

    <?php  
    $grade = $_POST["grade"]; 
     

    switch(strtoupper($grade)) {
        case "A": 
            echo "Result: You did great"; 
            break;
        case "B": 
            echo "Result: You did good";
            break;
        case "C": 
            echo "Result: You did okay";
            break; 
        case "D":
            echo "Result: You did poorly";
            break;
        case "E": 
            echo "Result: You failed";
            break;
        default:
            echo "Result: {$grade} is not a vlid grade";
    } 


      echo "<h1> Example 2 : Get the currrent date</h1>"; 
      $date = date("l");  //the l give you the day of the week
      switch($date) {
        case "Monday": 
            echo "Result: I hate Monday"; 
            break;
        case "Tuesday": 
            echo "Result: I love Tueday";
            break;
        case "Wednesday": 
            echo "Result: I love Wednesday";
            break; 
        case "Thursday":
            echo "Result: I love Thursday";
            break;
        case "Friday": 
            echo "Result: I love Friday";
            break;
        case "Saturday": 
            echo "Result: I love Saturday";
            break;
        case "Sunday": 
            echo "Result: I love Sunday";
            break;
        default:
            echo "Result: {$date} is not invalid";
        } 
    ?>  

   
</body>
</html>
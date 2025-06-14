<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <?php 
     // while loop = do some code infinitely while some condition remains true
   
    echo"<h2> Example 1 </h2>";

     $counter = 0;
     while($counter <10){ 
        $counter++; 
        echo $counter . "<br>";
     } 

    echo"<h2> Example 2: Timer </h2>";
    $seconds = 10; 
    $running = true; 
     while ($running == true){ 
        echo "{$seconds}s <br>";  
        $seconds-=1; 
        if($seconds<0){ 
            $running = false;
        }
     }
    ?> 
</body>
</html>
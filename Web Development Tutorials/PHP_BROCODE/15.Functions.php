<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
        <!-- functions = write same conde once, reuse when you need it -->
 
    <?php 
        echo "<h1> Example 1 </h1>";
        function happy_birthday($firstname, $age){ 
            echo "Happy birthday to $firstname <br>"; 
            echo "You are $age years old <br>"; 
        }
        happy_birthday("Adi", 21); 

        echo "<h1> Example 2 with return function </h1>";
       /* ang ginagawa rito ay kinukuha niya muna yung value ng number tapos pagkakuha ng result
        ibabato niya ngayon ulit sa nasa echo natin*/
       
        function is_even($number){ 
            $result = $number % 2; 
            return $result; 

            //  shortcut = return $number % 2;
        }
        echo is_even(11);

        echo "<h1> Example 3 finding the hypotenuse of a right triangle </h1>"; 
        function hypotenuse($a, $b){
         $c = sqrt($a ** 2 + $b ** 2); 
         return $c; 
        } 

        echo hypotenuse(3, 4);
    ?>


</body>
</html>
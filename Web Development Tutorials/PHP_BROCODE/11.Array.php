<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body> 
    
    <?php 
     //array = "variable" which can hold more than one value at the same time
    echo "<h1> Array </h1>";
    
    $foods = array("apple", "orange", "banana", "coconut");
     
    // $foods[0] = "pineapple"; //this method is to change the data of the index
    // array_push($foods, "apple"); //to add a new indedx and data
    // array_pop($foods); //removing the last element
    // array_shift($foods); //removing the first element
    // $foods = array_reverse($foods); //to reverse the element 
   echo "How many elements: ";
    echo count($foods) ."<br>";

    //easy way to display array
    foreach($foods as $food){ 
     echo "{$food} <br>";
    }
    
    echo "<h1> Associative Arry </h1>";
    // associative array = An array made of key=> value pairs 

    $capitals = array("USA"=>"Washington D.C.",
     "Japan" => "Kyoto",
      "South Korea" => "Seoul",
      "India" => "New Delhi"); 
    // $capitals["USA"] = "Las Vegas"; //to update the key value
    // $capitals["China"] = "Beijing"; //to add new key value;
    // array_pop($capitals); //pop the last index
    // array_shift($capitals); //pop the first index 
    // $capitals = array_flip($capitals); // to switch the key and value
    // $capitals =  array_reverse($capitals); 
      echo "How many elements: ";
     echo count($capitals) ."<br>";
    foreach($capitals as $key => $value){ 
        echo "Keys: {$key} =  Value: {$value} <br>";
    }  

    echo "<h1> Example of \$keys = array_keys (\$capitals); </h1> ";

    $keys = array_keys($capitals); 
    foreach( $keys as $key){ 
        echo "Keys: " . $key . "<br>";
    }   

    
    echo "<h1> Example of \$values = array_values(\$capitals); </h1> ";

    $values = array_keys($capitals); 
    foreach( $values as $value){ 
        echo "Values: " . $value . "<br>";
    }  
    ?>

    <h1>Exercise 1</h1>
    <form action="11.Array.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country"> 
        <input type="submit">
    </form>
    <?php  
    //  <h1>Ang key ay ang name</h1>
        $country = $_POST["country"];
        $capitals = array( "USA"=>"Washington D.C.",
                            "Japan" => "Kyoto",
                            "South Korea" => "Seoul",
                            "India" => "New Delhi");
                            
        echo "Choices: <br>";                  
        foreach ($capitals as $key => $value) { 
            echo "The capital of {$key} is {$value}<br>";
        }
        echo "<br>";
        echo "Result: ";
        if (array_key_exists($country, $capitals)) {
            echo "The capital of {$country} is " . $capitals[$country];
        } else { 
            echo "That is not a valid country in the list.";
        }
      
    ?>


</body>
</html>
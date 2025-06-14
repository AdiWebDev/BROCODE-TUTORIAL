<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chookies</title>
</head>
<body>  
    <!-- $_COOKIE - A cookie is one of the reasons why advertisements that match our interests appear
        - If the user selects pizza, their news feed will show pizza advertisements
        - Remember user settings or preferences (e.g., language, theme, favorite items)
    -->
 
 <?php 
    setcookie("fav_food", "pizza", time() + (86400 * 2),"/"); //to set a cookie
    setcookie("fav_drink", "coffee", time() -0,"/"); //to delete a cookie set it to - 0
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4),"/"); 


    foreach ($_COOKIE as $key => $value){ 
        echo "{$key} = {$value} <br>"; 
    }

    if(isset($_COOKIE["fav_food"])){ 
        echo "BUY SOME {$_COOKIE["fav_food"]}!!!";
    }
    else { 
        echo "I don't know your favorite food";
    }
 ?> 



</body>
</html>
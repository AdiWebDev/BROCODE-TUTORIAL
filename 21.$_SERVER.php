<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>   
  

    <!-- Kahit magpalit ka ng name ay hindi -->  

        
      <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            Username: <br> 
            <input type="text" name="username"><br> 

            <input type="submit"  name ="login" value="login">
    </form>

</body>
</html> 


<?php 
        /* $_SERVER = that contains headers, paths, and script locations. 
                        The entries in this array are created by the web server
                        Show nearly everything you need to know about the current web page env. */

        // ito yung mga ginagamit sa syntax sa $_SERVER
        // foreach($_SERVER as $key => $value){ 
        //   echo "{$key} = {$value} <br>";  
        // }

        if($_SERVER["REQUEST_METHOD"] == "POST"){ 
            echo "HELLO";
        }
?>
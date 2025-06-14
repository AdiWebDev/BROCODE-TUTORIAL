<?php


    include("23.Database.php");

    $username = "adada"; 
    $password = "Htosaadadadaows"; 
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";  
            
    try{ 
         mysqli_query($conn, $sql); 
         echo "User is now registered";
    } 
    catch(mysqli_sql_exception){ 
        echo"Could not register use";
    }
   
    mysqli_close($conn); 
    ?>
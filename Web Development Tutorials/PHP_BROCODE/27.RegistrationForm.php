<?php  
  include("23.Database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
        <form action="<?php htmlspecialchars ($_SERVER["PHP_SELF"]) ?>" method="post">
            <h2>Welcome to LOGIN page</h2> 
            Username: <br>
            <input type="text" name="username"> <br> 
            Password: <br>
            <input type="password" name="password"> <br>
            <input type="submit" name="submit" value="register">
        </form>
</body>
</html> 


<?php  


if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); 
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username)){ 
        echo "Please enter a username"; 
    }
    elseif(empty($password)){ 
        echo "Please enter a password"; 
    } 
    else{ 
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    $sql = "INSERT INTO users (user, password) 
            VALUES ('$username', '$hash')";   
            
            //The try catch is to rename or set the error name
    try{ 
          mysqli_query($conn, $sql);
            echo "You are now registered";
    } 
    catch(mysqli_sql_exception){
            echo "Registration failed or username already exists";
    }
          
    }
} 




 mysqli_close($conn);
?>
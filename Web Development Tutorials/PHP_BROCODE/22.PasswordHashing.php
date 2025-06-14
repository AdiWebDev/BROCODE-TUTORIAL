<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
</head>
<body>
    
</body>
</html> 


<!-- hashing =  Hide the original data from 3rd parties 
                Into letters, numbers, and symbols --> 
            
                
<?php 
        $password = "Hotdog"; 

        $hash = password_hash($password, PASSWORD_DEFAULT); 
        if(password_verify("Hotdog", $hash)){ 
            echo "You are logged in!";
        } 
        else {
            echo "Incorrect password";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize/Validate Input</title>
</head>
<body>
        <form action="17.InputSanitization.php" method="post">
            Username: <br> 
            <input type="text" name="username"><br> 
             Age: <br> 
            <input type="text" name="age"><br>
             Email: <br> 
            <input type="text" name="email"><br>
            <input type="submit"  name ="login" value="login">
        </form>
        <?php   


            echo "<h1> Example 1</h1>";
            if(isset($_POST["login"])){ 
                //FILTER_SANITIZE_SPECIAL_CHARS  =   // Sanitize the username input to remove special HTML characters
                $username = filter_input(INPUT_POST, "username", 
                                         FILTER_SANITIZE_SPECIAL_CHARS);           
                echo "Hello {$username} <br>"; 
                //FILTER_SANITIZE_NUMBER = // Sanitize the age input to allow only integer numbers
                $age = filter_input(INPUT_POST, "age", 
                                    FILTER_SANITIZE_NUMBER_INT);           
                echo "You are {$age} years old <br>"; 
                 //FILTER_VALIDATEE_EMAIL = // Validate if that is email  also invalid if they type illegal charatect <> () <>
                $email = filter_input(INPUT_POST, "email", 
                                    FILTER_VALIDATE_EMAIL);           
                echo "Your email is {$email}"; 
            } 
            echo "<h1> Example 2</h1>";  
            if(isset($_POST["login"])){ 
                $age = filter_input(INPUT_POST, "age", 
                                    FILTER_SANITIZE_NUMBER_INT);           
                if(empty($age)){ 
                    echo "That number was not valid <br>";
                } 
                else { 
                    echo "You are $age years old <br>";
                } 

                if(empty($email)){ 
                    echo "That email was not valid <br>";
                } 
                else { 
                      echo "Your email is {$email} <br>"; 
                }
             } 
            
        ?>
</body>
</html>  



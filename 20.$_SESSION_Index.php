
<?php 
   session_start(); 
//   <!-- session - ginagamit for login credentials, pwedeng gamitin sa multiple page sa gamit ng login crendetials -->

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
</head>
<body>
     <form action="20.$_SESSION_Index.php" method="post">
            Username: <br> 
            <input type="text" name="username"><br> 
             Password: <br> 
            <input type="password" name="password"><br>
            <input type="submit"  name ="login" value="login">
    </form>
</body>
</html> 

<?php 
    if(isset($_POST["login"])){ 

        if(!empty($_POST["username"])&&($_POST["password"])){ 
        $_SESSION["username"] =$_POST["username"]; 
        $_SESSION["password"] =$_POST["password"];  

            //to redirect or jump to home page 
            header("Location: 20.\$_SESSION_Home.php");
        } 
        else{ 
            echo"Missing username/password <br>";
        }
    }

?>
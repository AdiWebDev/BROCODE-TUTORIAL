
<?php 
   session_start(); 
//   <!-- session - ginagamit for login credentials, pwedeng gamitin sa multiple page sa gamit ng login crendetials -->

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    This is the HOME page   <br>
   <form action="20.$_SESSION_Home.php" method="post">
        <input type="submit" name="logout" value="logout">
   </form>
</body>
</html> 

<?php    

   echo "Username:" . $_SESSION["username"] . "<br>"; 
   echo "Password:" . $_SESSION["password"] . "<br>";  
   
    if(isset($_POST["logout"])){ 
        session_destroy(); 
        header("Location: 20.\$_SESSION_Index.php");
    }

?>
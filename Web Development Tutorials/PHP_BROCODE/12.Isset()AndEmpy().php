<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Isset() and Empy()</title>
</head>
<body>
    <?php 
    // isset () =  Returns TRUE if a variable is declared and not null  
                // Kailangan may laman ang value mo kasi pag wala, walang magdidisplay. 
                // Pag null or hindi naka-set, wala siyang i-display.
    // empty() = Returns TRUE if a variable is not decalred, false, null
            //Nag rereturn siya ng true pag empty or nagdidisplay ng 1 
   //Pinagkaiba nila ang Isset ay nagrereturn ng false or no display pag ka null or wala kang nilagay, true pa rin siya kahit naglagay ka ng false value.
   //Samantalang ang empty pag nagdeclare ka ng false, null,  
   
   
    $username = false; 
    echo "<h1> isset() example: </h1>";
    if(isset($username)){ 
        echo "This variable is set";
    }
    else { 
        echo "This variable is NOT set";
    }

    $password = false; 
    echo "<h1> empty() example: </h1>"; 
    if(empty($password)){ 
        echo "This variable is empty";
    }
    else { 
        echo "This variable is NOT empty";
    }
    ?> 

    <h1>Example log in form: </h1>
    <form action="12.Isset()AndEmpy().php" method="post">
        <label>username: </label> 
        <input type="text" name="username"></br>
        <label>password: </label> 
        <input type="password" name="password"></br>
        <input type="submit" name="login" value="Log in">
    </form> 

    <?php  
    /*Ang empty() ay konektado sa value ng name mo. 
        if di ka nag-input lalabas na empty at
         pag nag input ka naman lalabas na not empty*/
    foreach($_POST as $key => $value){ 
        echo "{$key} = {$value} <br>"; 
        if(isset($key)){ 
         echo "This variable is set <br> ";
         }
        else { 
        echo "This variable is NOT set <br> <br>";
        }
        if(empty($value)){ 
          echo "This variable is empty <br> ";
         }
        else { 
        echo "This variable is NOT empty <br> <br>";
        }
    

        if(isset($_POST["login"])){ 
            $username = $_POST["username"]; 
            $password = $_POST["password"]; 

            if(empty($username)){ 
                echo "Username is missing"; 
            }
            elseif(empty($password)){ 
                echo "Password is missing"; 
            } 
            else{ 
                echo "Hello {$username}";
            }
        }
    }
    ?>
</body>
</html>




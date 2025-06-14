<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
     <?php 
        $username = "Bro Code"; 
        $phone = "123-456-7890";
        // $username = strtolower($username); //All small letters

        // $username = strtoupper($username); //All cappital letters 

        // $username = str_pad($username, 20, "e"); // (varaible, max size,  characters to the right to make it 20)
        
        // $username = strrev($username); // To reverse the string 

        // $username = str_shuffle($username);  //To shuffle the string value
        // $equals = strcmp($username, "Bro Code");  //if they are same it will return 0
        // echo $equals;   

        //  $count = strlen($username);  //To check the length of the string

        // $count = strpos($username, " "); //To check the first position of that char
        // echo $count ."<br>";

        // $firsname = substr($username, 0, 3); //substr(variable,start,end) 
        // echo $firsname ."<br>"; 
        // $lastname = substr($username, 4); // pag ganito ibibigay niya na yung una hanggang dulo
        // echo $lastname ."<br>";

        // $fullname = explode(" ", $username); //("ITO IS PANG CUT", VARIABLE) SO PARANG NAGIGING ARRAY SIYA PINAG PUPUTO NIYA ["BRO", "CODE"]
        // foreach($fullname as $name){ 
        //     echo $name . "<br>";
        // } 
        
        //  $implode = array("Bro", "Code" ); 
        //  $implode = implode("-", $implode); //Pinagsasama niya ang laman ng array ginagawa niyang isang buong string
        //  echo $implode . "<br>";
   
        echo $username;  

        // $phone = str_replace("-", " ", $phone); //("search", "replace", $variable); 
        // echo $phone;
       
     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <!-- Pag gagawa tayo ng radio button, kailangan natin ng name, 
     para makabuo siya ng group and makapagselect lang ng isa. Kasi sa radio button, 
     isa lang ang pwede nating piliin. 
     Kailangan din na pag maglalagay ng name attribute ay same sila, para maging group ito--> 
    <h1>Example ng walang nakalagay na name or di sila same ng name: </h1>
    <form action="13.RadioButton.php" method="post">
        <input type="radio" name="card1" value="Visa">Visa <br>
        <input type="radio"name="card1" value="Mastercard">Mastercard <br>
        <input type="radio"name="naiiba_na_card" value="American Express">American Express <br>
        <input type="submit">
     </form>

    <h1>Example ng may nakalagay na name at parehas: </h1>
     <form action="13.RadioButton.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa <br>
        <input type="radio"name="credit_card" value="Mastercard">Mastercard <br>
        <input type="radio"name="credit_card" value="American Express">American Express <br>
        <input type="submit" name="confirm" value="confirm">
     </form>


    <?php  
        if(isset($_POST["confirm"])){  
            
            if(isset($_POST["credit_card"])){ 
                $credit_card = $_POST["credit_card"]; 
        
            }
            switch($credit_card){ 
                case "Visa": 
                    echo "You selected Visa";
                    break;
                case "Visa": 
                    echo "You selected Visa";
                    break;
                case "Visa": 
                    echo "You selected Visa";
                    break; 
                default: 
                    echo "Please make a selection";
                }
           
          
        }
     

    ?>

</body>
</html>
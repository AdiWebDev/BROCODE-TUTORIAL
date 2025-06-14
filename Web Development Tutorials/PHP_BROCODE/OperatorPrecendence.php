<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Precedence</title>
</head>
<body> 
    <h3>Ordering lang kung ano ang dapat unahin na operator kung ito ay sabay-sabay na ginagamit</h3>
    <?php 
 
    //Operator Precedence
    //()
    // ** 
    // * / %
    // * -
    //The order of programming when it comes to operator is PMDAS method
    $total = 1 + 2 - 3 * 4 / 5 ** 6;

    echo "Result: {$total}" ; 
?> 
</body>
</html>
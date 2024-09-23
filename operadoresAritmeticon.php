<?php

if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];
    
    // operadores aritmeticos
    // suma
    $suma= $valorA + $valorB;
    // resta
    $resta= $valorA - $valorB;
    // multiplicación
    $multiplicacion= $valorA * $valorB;
    // división
    $division= $valorA / $valorB;

    echo $suma . "\n" . $resta . "\n" . $multiplicacion . "\n" . $division;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    
    <form action="operadoresAritmeticon.php" method="post">
        
        <span>Suma</span>
        <br>
        <span>ValorA:</span>
        <input type="text" name="ValorA" id="">
        <br>
        <span>ValorB:</span>
        <input type="text" name="ValorB" id="">
        <br>
        <input type="submit" value="Calcular">


    </form>

</body>
</html>
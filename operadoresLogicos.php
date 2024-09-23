<?php

if($_POST){

    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];
    
    // operador relacionar preguntara si es un valor diferente al otro.
    if (($valorA != $valorB) && ( $valorA < $valorB)) {
        echo "El valor de A es mayor!";
    }else{
        echo "El valor de A es menor";  
    }

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
    
    <form action="operadoresLogicos.php" method="post">
        
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
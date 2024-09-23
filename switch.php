<?php 

if($_POST){

    $btn1=$_POST['btnValor'];

    switch ($btn1) {
        case 1:
            echo "El usuario Selecciono 1";
            break;
        case 2:
            echo "El usuario Selecciono 2";
            break;    
        case 3:
            echo "El usuario Selecciono 3";
            break;
    };

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    
    <form action="switch.php" method="post">
        <input type="submit" value="1" name="btnValor">
        <br>
        <input type="submit" value="2" name="btnValor">
        <br>
        <input type="submit" value="3" name="btnValor">
    </form>

</body>
</html>
<?php

   if ($_POST) {
         // el metodo post me permite recepcionar información
    // Recivir informacicón del formulario metogo post
    $name = $_POST['txtName']; // se debe pasar como un arreglo

    echo $name;
   } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hola Mundo</h1>

    <form action="metodoPost.php" method="post">
        <span>Name:</span>
        <input type="text" name="txtName" id="">
        <br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>
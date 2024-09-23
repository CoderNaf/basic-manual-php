<?php

if($_POST){
    
    $welcome = "Hi! ";

    $firstName=$_POST['FirstName'];
    $lastName=$_POST['LastName'];

    echo $welcome . $firstName . " " . $lastName;

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

<form action="string&Concatenación.php" method="post">
    <span>First Name:</span>
    <input type="text" name="FirstName" id="">
    <br>
    <span>Last Name:</span>
    <input type="text" name="LastName" id="">
    <br>
    <input type="submit" value="Enviar">

</form>

</body>
</html>
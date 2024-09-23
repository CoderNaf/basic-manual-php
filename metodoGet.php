<?php

if ($_GET) {
    
    $welcome = "Hi!";
    // el metodo GET es el envio de información por medio de una url
    $name=$_GET['txtName'];

    echo $welcome . " " . $name ;

}

?>
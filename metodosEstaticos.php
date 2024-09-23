<?php

    class AClass{

        public static function method(){
            echo "Hola soy un static method" . "\n";
        }

    }

    $aobject = new AClass();
    $aobject->method();

    AClass::method();
?>
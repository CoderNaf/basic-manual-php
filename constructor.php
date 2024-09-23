<?php

    // Una clase es como un "molde" o "plantilla" que define las propiedades y métodos que los objetos creados a partir de ella tendrán.

    class Person {
        public $name; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.
        public $Lastname; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.
        private $age; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.
        protected $big; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.

        
        function __construct($newName,$newLastName){

            $this->name=$newName;
            $this->Lastname=$newLastName;

        }
        // Este es un método llamado AsignatePerson. Los métodos son acciones que la clase puede realizar.
        public function AsignatePerson($newName) {
            // $this se refiere a la instancia actual de la clase (el objeto creado).
            // Aquí estamos asignando el valor recibido en $newName a la propiedad $name de este objeto.
            $this->name = $newName;
        }
        public function printGreeting(){

            echo 'hola' . $this->name . $this->Lastname . "\n";

        }
    }

    $objetoAlumno = new Person(' Fabian Silva',' G.'); // creación de un objeto
    // $objetoAlumno->AsignatePerson('Fabian');
    $objetoAlumno->printGreeting();



?>

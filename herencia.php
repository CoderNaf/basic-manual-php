<?php

    // Una clase es como un "molde" o "plantilla" que define las propiedades y métodos que los objetos creados a partir de ella tendrán.

    class Person {
        public $name; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.
        private $age; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.
        protected $big; // Esta es una propiedad de la clase. Las propiedades almacenan datos. En este caso, $name representará el nombre de la persona.

        // Este es un método llamado AsignatePerson. Los métodos son acciones que la clase puede realizar.
        public function AsignatePerson($newName) {
            // $this se refiere a la instancia actual de la clase (el objeto creado).
            // Aquí estamos asignando el valor recibido en $newName a la propiedad $name de este objeto.
            $this->name = $newName;
        }
    }

    // herencia, podemos heredar cosas funciones o metodos esta es la manera:

    class Jobs extends Person{
        public $puesto;
        public function PresentJobs(){
            echo 'Hola Soy ' . $this->name . ' y soy ' . $this->puesto;
        }
    }

    $objetoAlumno = new Person(); // creación de un objeto
    $objetoAlumno->AsignatePerson('Fabian');

    $objectJobs = new Jobs();
    $objectJobs->AsignatePerson('Fabian');
    $objectJobs->puesto='Developer';

    echo $objectJobs->PresentJobs() . "\n";

?>

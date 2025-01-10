<?php
//31-Crear una clase llamada Persona con atributos nombre y edad.

class Persona {

    private $nombre; 
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function saludo(){
        echo "Hola, mi nombre es ".$this->getNombre()." y tengo ".$this->getEdad()." años \n";
    }
}

$persona = new Persona("Juan", 22);

$persona->saludo();

$persona->setEdad(55);

$persona->saludo();
?>
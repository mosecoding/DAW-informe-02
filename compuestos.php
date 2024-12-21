<?php

// Ejemplo 1: Array
$persona = array(
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
);  // Array asociativo
echo $persona["nombre"];  // Salida: Juan

// Ejemplo 2: Objeto
class Persona
{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar()
    {
        echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}
$juan = new Persona("Juan", 30);
$juan->saludar();  // Salida: Hola, mi nombre es Juan y tengo 30 años.

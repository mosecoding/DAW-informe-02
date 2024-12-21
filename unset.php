<?php

// Ejemplo 1
$frutas = ["manzana", "banana", "naranja", "pera"];
print_r($frutas);
unset($frutas[1]);
print_r($frutas);

// Ejemplo 2
$personas = [
    "persona1" => ["nombre" => "Juan", "edad" => 30],
    "persona2" => ["nombre" => "Maria", "edad" => 25],
    "persona3" => ["nombre" => "Carlos", "edad" => 35],
];
print_r($personas);
unset($personas["persona2"]);
print_r($personas);

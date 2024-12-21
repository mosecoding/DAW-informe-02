<?php

// Ejemplo 1
$usuario_logueado = true;
if ($usuario_logueado) {
    echo "El usuario está logueado.";
} else {
    echo "El usuario no está logueado.";
}

// Ejemplo 2
$esEstudiante = true;
$tieneBeca = false;

if ($esEstudiante && $tieneBeca) {
    echo "La persona es estudiante y tiene beca.";
} else {
    echo "La persona no cumple con ambos requisitos.";
}

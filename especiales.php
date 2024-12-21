<?php

// Ejemplo 1: Null
$variable = NULL;
if (is_null($variable)) {
    echo "La variable no tiene valor.";
} else {
    echo "La variable tiene un valor.";
}

// Ejemplo 2: Resources
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
echo "Conexión exitosa.";
mysqli_close($conexion);

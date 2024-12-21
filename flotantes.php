<?php

// Ejemplo 1
$precio = 25.5;
$cantidad = 3;
$total = $precio * $cantidad;
echo "El total es: $total";

// Ejemplo 2
$numero = 3.177;
if (is_float($numero)) {
    echo "$numero es un flotante";
} else {
    echo "$numero no es un flotante";
}

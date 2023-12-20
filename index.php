<?php

$nombre = "Camila";
$apellido = "Rojas";

function concatenar($nombre, $apellido) {
    echo "$nombre $apellido";
}

concatenar("Camila", "Rojas");

function sumNumbers($numeros) {
    $suma = 0;

    for($i=0; $i<4; $i++) {
        $suma += $numeros[$i];
    }

    echo "\nLa suma de los valores del array es: $suma\n";
}

$numeros = array(1,2,3,4);
sumNumbers($numeros);

$nombres = array("Ana", "Juan", "Camila");
var_dump(is_array($nombres)); // is_array valida si la variable es un array, si es un array retornara un true y si no es un array retornara false



?>


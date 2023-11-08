<?php

/*
Tipos de datos
En programación tenemos varios tipos de datos, los más conocidos son:

    Numéricos:
        Integer: Número sin decimales.
        Float: Número con punto flotante o punto decimal.
        Double: Decimales con valores más precisos, con más decimales que float.
    Cadenas ded caracteres:
        Chart: Un solo una letra o un simbolo.
        String: Una cadena de caracteres.
    Booleanos:
        Bool: Verdadero o falso.
    Sin valor:
        Null: No hay valor.
        Undefined: Hay una variable pero no tiene ningun valor.
PHP tiene un tipado débil, no necesita que se defina de forma explicita el tipo de dato ya que lo deduce por si mismo.

PHP es capaz de convertir de un tipo a otro de forma automática. Por ejemplo si sumas un número con un string PHP evaluará ambos como números.


*/

$numerito = 874541362;
var_dump($numerito);
echo "\n";

$numerito = "23";
var_dump($numerito);
echo "\n";

$numerito = $numerito + 2;
var_dump($numerito);
echo "\n";

$numerito = $numerito + 0.3;
var_dump($numerito);
echo "\n";

$nuevo_numerito = "23";
$numerito = $nuevo_numerito + 2;
var_dump($nuevo_numerito);
echo "\n";


$papas = "10 papas en el costal";
$cuantas_papas_hay = $papas + 5;
echo $cuantas_papas_hay; // php hara esta suma pero dara un warning por que esto no esta bien ya que es un string sumandose con un numeric
<?php

$numero_1 = 8;
$numero_2 = 7;

$nombre = "carlos";

define("NUMERO_PI", 3.14); // asi se definen variables constantes en php, usando el metodo define y lleva dos parametros el primero es el nombre de la variable y el segundo seria su valor
//define("NUMERO_PI", 14); // esto dara un warning por que las constantes no se pueden cambiar su valor
//NUMERO_PI = 14; // esto da error por lo mismo no se puede cambiar valores de constantes de ninguna manera
echo $numero_1 + $numero_2;
echo "\n";
echo $nombre;
echo "\n";
echo NUMERO_PI; // para llamar una constante simplemente colocamos sin llave el nombre del primer parametro que definimos anteriormente
echo "\n";





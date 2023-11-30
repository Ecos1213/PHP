<?php

$asientos_disponibles = 4;
$es_hijo_de_tom_holland = true;

if($asientos_disponibles > 0) {
    echo "Puedes ver la pelicula de Spidey";
}
else if($es_hijo_de_tom_holland == true) {
    echo "No te creo, pero puedes ver la pelicula";
}
else {
    echo "Lo sentimos, te tocara spoilearte";
}

echo "\n";

if($asientos_disponibles < 0)
    echo "Puedes ver la pelicula de Spidey";
else if($es_hijo_de_tom_holland) // como el if acepta solo booleanos podemos quitar el == true
    echo "No te creo, pero puedes ver la pelicula";
else
    echo "Lo sentimos, te tocara spoilearte";
#tambien podemos quitar las llaves {} del if y else solo si esta tiene una sola linea de codigo

echo "\n";
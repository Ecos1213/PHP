<?php

/*
// el iterable es el array y valor seria el valor
foreach($iterable as $valor) {

}

// hay otra forma que es para obtener la llave del array de un arreglo asociativo o subindice
foraeach($iterable as $llave => $valor) {

}
*/

$tiendita_de_cafes = array (
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

foreach($tiendita_de_cafes as $price) {
    echo "El café en cuestión cuesta $$price USD \n";
}

echo "\n";

foreach($tiendita_de_cafes as $subindice => $price) {
    echo "El café $subindice cuesta $$price USD \n";
}

echo "\n";

//asi como el if si tenemos solo una linea de codigo podemos omitir las llaves {}, pero si tenemos mas de una linea toca usar las llaves

foreach($tiendita_de_cafes as $subindice => $price)
    echo "El café $subindice cuesta $$price USD \n";

echo "\n";

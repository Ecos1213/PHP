<?php

// en todos los ciclos existen la palabra reservada break y continue
// break: lo que hace break es romper el ciclo, apenas el toque la palabra break lo que hace el ciclo es destruirse y ya no continua o sea el ciclo se rompe
//continue: el continue lo que hace es saltar al siguiente ciclo es decir no importa si el bloque de codigo no se a terminado de ejecutar cuando encuentra un continue, simplemente se salta al siguiente ciclo 

$tiendita_de_cafes = array (
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24,
);

foreach($tiendita_de_cafes as $cafe => $price) {
    echo "Actualmente encontre al café $cafe \n";
    if($cafe === "Latte") {
        echo "!Encontramos a Latte! \n";
        break; // quibra el ciclo hasta que encuentre latte
    }
}

echo "\n";

foreach($tiendita_de_cafes as $cafe => $price) {
    
    if($cafe === "Recalentado") {
        continue; // el continue apenas encontremos el cafe recalentado saltarse al siguiente ciclo o iteracion y no va a imprimir o ejecutar lo que esta despues
    }

    echo "El café $cafe es muy rico \n";
}

echo "\n";




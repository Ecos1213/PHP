<?php

//Array asociativos es un array con llaves y se pueden colocar los arrays asociativos de dos siguientes maneras
//$edades = ["carlos" => 20, "mr.michi" => 18, "juan" => 40];
$edades = array(
    "carlos" => 20, 
    "mr.michi" => 18, 
    "juan" => 40, // la coma al final del array es completamente opcional y no dara error a esto se le llama Trailing commas, esto se debe a que si copias y pegas con la coma php te facilita la vida

);

echo "La edad de Mr-Michi es " . $edades["mr.michi"];

echo "\n";

$cafes = [

    "capuccino" => 50, 
    "latte" => 49, 
    "americano" => 70,

];

echo "El precio del cafe americano es de {$cafes['americano']}"; // si queremos ejecutar una variable de tipo array tenemos que encerrarla en {} si no nos dara un error, esto solo funciona con variables de tipos mas simples desde int a strings
echo "\n";

// podemos tambien dentro de un array con llaves asignarles un array y ese array colocarle diferentes valores incluso podemocs colocar un array dentro de un array deontro de un array asi sucesivamente
$personas = array(
    "carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "mr.michi" => array(
        "edad" => 18,
        "apellido" => "Michisiancio"
    )
);

echo "La informacion de Mr. Michi es: Edad: " .  $personas["mr.michi"]["edad"] .  " Apellido: " . $personas["mr.michi"]["apellido"]; // esto funciona como una matriz asociativa osea que para llamarlo tenemos en este caso usar dos veces [] con sus claves correspondientes
echo "\n";

$personas = array(
    "carlos" => array(
        "edad" => 20,
        "apellido" => array(
            "primerApellido" => "tomatico",
            "segundoApellido" => "perea"
        )
    )
);

echo "La informacion de carlos es: Edad: " .  $personas["carlos"]["edad"] . " sus apellidos son: " . $personas["carlos"]["apellido"]["primerApellido"] . " " . $personas["carlos"]["apellido"]["segundoApellido"];
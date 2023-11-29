<?php

$michis = array(
    array(
        "nombre" => "Daniel",
        "ocupacion" => "ingeniero de sistemas",
        "color" => "purpura",
        "comidas" => array(
            "comidasFavoritas" => "tamal, pollo al horno, pizza",
            "comidasNoFavoritas" => "ullucos, zapallo",
        ),
    ),
    array(
        "nombre" => "Miguel",
        "ocupacion" => "ingeniero de sistemas",
        "color" => "azul",
        "comidas" => array(
            "comidasFavoritas" => "chuleta de pollo",
            "comidasNoFavoritas" => "ullucos",
        ),
    ),
    array(
        "nombre" => "Daniel",
        "ocupacion" => "Diseñador Grafico",
        "color" => "purpura",
        "comidas" => array(
            "comidasFavoritas" =>  "chuleta de pollo, hamburguesa",
            "comidasNoFavoritas" => "zapallo",
        ),
    ),
    array(
        "nombre" => "Alvaro",
        "ocupacion" => "ingeniero electronico",
        "color" => "amarillo",
        "comidas" => array(
            "comidasFavoritas" => "pescado frito",
            "comidasNoFavoritas" => "limon, pizza",
        ),
    ),
);

for($i = 0; $i < count($michis); $i++) {
    $michiArray = $michis[$i];
    echo "\n";
    echo "Nombre:  ${michiArray['nombre']}"; // recuerda esto ${michiArray['nombre']} ya esta deprecrated y ademas que solo se puede colocar un solo nivel del array si no dara error
    echo "\n";
    echo "Ocupacion: " . $michis[$i]["ocupacion"] . "\n";
    echo "Color: " . $michis[$i]["color"] . "\n";

    
    $comidasFavoritas = $michis[$i]["comidas"]["comidasFavoritas"];
    $comidasNoFavoritas = $michis[$i]["comidas"]["comidasNoFavoritas"];
    echo "Comidas favoritas: " . $comidasFavoritas ;

    echo "\n";
    echo "Comidas No favoritas: " . $comidasNoFavoritas;
    echo "\n";
}
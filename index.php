<?php

function get_pokemon() {

    $numero_aleatorio = rand(1, 5); // el metodo rand sirve para generar un numero aleatorio. se puede agregar dos parametros el primero seria el minimo numero aleatorio y el segundo el maximo numero aleatorio

    switch ($numero_aleatorio) {
        case 1: 
            echo "Pikachu";
            break;
        case 2: 
            echo "Charmander";
            break;
        case 3:
            echo "Mewtwo";
            break;
        default:
            echo "Lo siento, no hay pokemon para ti :C";
    }
    echo "\n";
}

for($i = 0; $i< 4; $i++) {
    get_pokemon();
}

echo "\n";
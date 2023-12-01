<?php

$usernames = ["Pepito123", "MrMichi", "RetaxMain"];

do {
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
    #echo "Esto se ejecuta por lo menos una vez";

    echo "\n";
} while(in_array($username, $usernames)); //in_array nos permite saber si esta o no esta dentro de un array, el primer valor que pasemos como parametro es el valor que queremos buscar y el segundo es el array, true si esta el valor y false si no

echo "\n";
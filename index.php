<?php



$donations = readline("Profavor ingresa la cantidad de donaciones acumuladas a retirar: ");

if( $donations >= 100) {
    echo "has retirado un total de $donations";
} else {
    echo "No tienes fondos suficientes para poder retirarlo, tienes que tener mas de 100 para poder retirar";
}





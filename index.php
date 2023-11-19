<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == igualdad, este operador no compara tipos
echo "\nIgualdad, este operador no compara tipos \n";
var_dump( $a == $b );
var_dump( $a == $b2 );
echo "\nIdentico, compara tipos \n";

// === identico, compara tipos
var_dump( $a === $b  );
var_dump( $a === $b2 );
echo "\nDiferente , este operador no compara tipos \n";

// != Diferente, este operador no compara tipos
var_dump( $a != $b  );
var_dump( $a != $b2 );
echo "\nDiferente, compara tipos \n";

// !== Diferente, compara tipos
var_dump( $a !== $b  );
var_dump( $a !== $b2 );
echo "\n< Menor que \n";

// < Menor que 
var_dump( $a < $b  );
var_dump( $c < $b2 );
var_dump( $d < $b  );
echo "\n> Mayor que \n";

// > Mayor que
var_dump( $a > $b  );
var_dump( $c > $b2 );
var_dump( $d > $b  );
echo "\n>= Mayor o igual que \n";

// >= Mayor o igual que
var_dump( $a >= $b  );
var_dump( $c >= $b2 );
var_dump( $d >= $b  );
echo "\n<= Menor o igual que \n";

// <= Menor o igual que
var_dump( $a <= $b  );
var_dump( $c <= $b2 );
var_dump( $d <= $b  );
echo "\n";

//<=> El operador de nave espacial

/*
    En PHP, el operador de nave espacial (<=>) se utiliza para comparar dos expresiones. Este operador devuelve
    un valor entero negativo si la expresión de la izquierda es menor que la expresión de la derecha, 
    cero si son iguales y un valor entero positivo si la expresión de la izquierda es mayor que la expresión de la derecha.
*/

echo 2 <=> 1; // 1, porque es mayor el de la izquierda
echo "\n";

echo 1 <=> 1; // 0, porque son iguales
echo "\n";

echo 1 <=> 2; // -1, porque es menor el de la izquierda
echo "\n";

//?? Fusion de null
$edad_de_pepito = 23;

/*
    El operador de fusión null (??) en PHP se utiliza para proporcionar un valor de respaldo en caso de que el primer operando sea null. 
    Si el primer operando no es null, el operador de fusión null devuelve ese valor.
*/
echo $edad_de_juianito ?? $edad_de_pepito ?? $edad_de_jaimito; // incluso se puede colocar varios oepradroes y tomara el primero que tenga un valor

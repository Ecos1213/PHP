<?php

// Operador de asignacion
$edad_de_jaimito = ($edad_de_pepito = 18) + 5; //en asignacion de una variable tambien podemos hacer que otra variable se asigne un valor (para que esto funcione tenemos que colocar dentro de parentesis definir la variable y fuera la operacion aritmetica, php primero resolvera lo que esta en parentesis y despues hara la operacion aritmetica) y despues sumar ese valor con una constante 

echo "La edad de pepito es $edad_de_pepito \n";
echo "La edad de jaimito es $edad_de_jaimito";

echo "\n";

$contador = 1;
$contador += 1; //$contador = $contador + 1;
echo $contador;

echo "\n";
$contador++; // incremento en 1 en 1
echo $contador;

echo "\n";
$contador -= 1;
echo $contador;

echo "\n";
$contador *= 2;
echo $contador;

echo "\n";
$contador--;
echo $contador;

echo "\n";
$contador /= 2;
echo $contador;

echo "\n";
$nombre = "Carlos";
$nombre .= " Santana"; // $nombre = $nombre . " " . "Santana";
echo $nombre;

$contador = 1;
$resultado = ++$contador; // como en java tambien pasa que depende de la posicion del operador ++ si esta en la izquierda primero hace la suma y despues asigna el valor a la variable si esta a la derecha primero hace la asignacion a la variable y despues la suma, esto se le llama Precedencia de operadores
echo $resultado;
<?php

/*
Operadores Aritméticos
Adición ⇒ +
Sustracción ⇒ -
Multiplicación ⇒ *
División ⇒ /
Modulo ⇒ % ⇒ Se usa para conocer el residuo de una división ⇒ $a % $b
Potenciación ⇒ ** ⇒ $a ** $b
Identidad ⇒ Sirve para convertir un string a un int o float, según sea el caso ⇒ + ⇒ +$a
Negación ⇒ Convierte un numero positivo a negativo ⇒ -$a

*/

echo 5 + 5;

echo "\n";

$resultado = 5 - 3;
echo "este es el resultado: $resultado \n";

$resultado = 5 ** 3; // 5 elevado a la 3 = 5 x 5 x 5
echo $resultado . "\n";

$horasTotales = 7201;

echo "$horasTotales segundo convertidos a horas son ". ($horasTotales/3600) .  " \n";
echo "Sobran " . ($horasTotales % 3600). " segundos. \n";

echo (5*6) . " " . (80 / 4). "\n";

echo (5 / 2) . "\n";
echo (5 % 2 ) . "\n";

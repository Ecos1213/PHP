<?php


$segundos = readline("Ingresda el tiempo en segundos: "); // el metodo readline nos permite pedir un valor a un usuario por consola, este retornara el valor y podemos agregarlo directamente a una variable, lleva como parametro el mensaje que aparecera en consola

$horas = (int)($segundos / 3600);

$segundos = (int)($segundos % 3600);

$minutos = (int)($segundos / 60);

$segundos = (int)($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos";

echo "\n";


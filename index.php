<?php


$horas = readline("Ingresa Horas: "); 

$minutos = readline("Ingresa Minutos: "); 

$segundos = readline("Ingresa segundos: "); 

$segundos += $horas * 3600;

$segundos += $minutos * 60;

echo "el tiempo asignado en segundos es de $segundos";

echo "\n";

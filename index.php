<?php

//recuerda que casting sirve para forzar a convertir de un tipo de dato a otro

$numerito = "5";

var_dump($numerito);

$numerito = (int) $numerito;

var_dump($numerito);

$dias = 5.89;

var_dump($dias);

$dias = (int) $dias;

var_dump($dias);

$banderita = 1;

var_dump($banderita);

$banderita = (bool) $banderita; //cualquier cosa que sea vacia o 0 lo dejara como false si no lo dejara como true

var_dump($banderita);


//ejercicio
//Fácil

$nombre = "Carlos"; //string
var_dump($nombre);
echo "\n";

$apellido = "Gómez"; //string
var_dump($apellido);
echo "\n";

$edad = 18;//int
var_dump($edad);
echo "\n";

$aprobado = true;// bool
var_dump($aprobado);
echo "\n";

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; // float
var_dump($promedio);
echo "\n";

$nombre_completo = $nombre . " " . $apellido; // string
var_dump($nombre_completo);
echo "\n";

$presento_examen = (bool) 1; // booleano
var_dump($presento_examen);
echo "\n";

//Avanzado
$numero_preguntas = 5 + "5"; //int
var_dump($numero_preguntas);
echo "\n";

$numero_respuestas = "5" + 5; //int
var_dump($numero_respuestas);
echo "\n";

$promedio_maximo = $numero_respuestas / 1.0; //float
var_dump($promedio_maximo);
echo "\n";

$michis = 3 + "5 michis"; //int
var_dump($michis);
echo "\n";
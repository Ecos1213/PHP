<?php
// aca estan todas las funciones que maneja un array https://www.php.net/manual/es/ref.array.php ya que solo veremos algunas 
$edades = [18, 22, 40, 34];

// count
echo count($edades) . "\n"; // cuenta cuantos elementos hay un arreglo, lleva como parametro el array

// array_push 
array_push($edades, 13); // agrega un valor al final del array, el primer parametro es el arreglo y el segundo es el valor que agregara al final del array
var_dump($edades);
echo "\n";

// is_array
$esto_no_es_un_arreglo = "";

var_dump(is_array($esto_no_es_un_arreglo));// define o para ver si alguna variable o cualquier cosa es un arreglo, true si es un arreglo, false si no lo es
echo "\n";

var_dump(is_array($edades));
echo "\n";

// explode
$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);// explode divide un string segun el argumento por cual dividiremos y este resultado lo convierte en un array, el primer argumento seria el separador el cual dividira el metodo y el segundo el string
var_dump($lista_de_frutas_array);
echo "\n";

// implode
$lista_de_frutas_array = ["fresa", "cereza", "manzana"];
$lista_de_frutas = implode(",",$lista_de_frutas_array); // implode lo que hace es convertir el array en un string si queremos podemos colocar una concatenacion, el primer parametro sera la concatenacion que queramos colocarle al string y el segundo seria el array (el string quedaria asi con la concatenacion "fresa,cereza,manzana")
var_dump($lista_de_frutas);
echo "\n";
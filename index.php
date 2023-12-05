<?php

// el operador de nave espacial nos sirve para organizar un arreglo usando la funcion usort, esta funcion ordena un array segun sus valores usando una funcion de comparacion definida por el usuario
// el usort realmente no devuelve un arreglo si no que modifica diractamente el arreglo original que nosotros le damos como parametro
$precios_de_cafes = [12, 56, 32, 89, 2, 1];

usort($precios_de_cafes, function($a, $b){ // asi como en javascript php tambien nos permite crear una funcin anonima solo con la palabra function y sus parentesis ()
    return $a <=> $b; // retornaremos la comparacion para que cree solo un array, esta comparacion tiene que retornar el valor menor, igual o mayor por eso se usa el nave espacial ya que devolvera un valor menor que es -1 asi usrot considerara que este valor es menor el primer valor que el segundo, 0 si son iguales y 1 si es mayor y asi nuestro usort ordenara nuestro array
}); // usort como primer parametro tenemos que darle el array, este array se modificara dirctamente osea modificara el array original y no devolvera uno nuevo y como segundo parametro tenemos que colocar un callable o callback, osea una funcion que realize la comparasion del arreglo y este le colocaremos una funcion anonima, este callback recibe dos paramaetros que son los valores del array, el primer parametro usara el primer valor del array y el segundo parametro sera el segundo valor del array y estos valores seguiran tomando el tercer valor del array como primer parametro y el 4 valor del array como segundo parametro hasta terminar el array


var_dump($precios_de_cafes);
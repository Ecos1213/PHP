<?php

$valorA = true;
$valorB = false;

$resultado = ($valorA and $valorB); // por precedencia de operadores el operador and lo que hace es tomar el primer valor igualarlo a resultado y despues hacer el operador logico ya que and va de izquierda a derecha y por ende toma primero el operador de igualddad, podemos evitar esto colocandole parentesis para ejecute primero el operador logico
var_dump($resultado);

$resultado = $valorA && $valorB; // a cambio los simbolos && toma primero el operador logico y despues el operador de igualdad
var_dump($resultado);

$resultado = ($valorA or $valorB); // sucede igual con or y ||, or sucede igual que and y || sucede igual que &&
var_dump($resultado);

$resultado = $valorA || $valorB; // sucede igual con or y ||, or sucede igual que and y || sucede igual que &&
var_dump($resultado);

$resultado = $valorA xor $valorB; // xor lo que hace es que si uno u otro es true el resultado es true sino sera false (esto quiere decir que ambos tiene que false para que de false), tambien sucede lo mismo que or y and
var_dump($resultado);

$resultado = !$valorA;
var_dump($resultado);
?>


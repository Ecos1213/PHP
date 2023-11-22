<?php
/*
la precedencia de operadores depende de la asociatividad quiere decir como toma el lenguaje las operaciones 
en ciertas situaciones tomara primero de izquierda a derecha y otras vez lo contrario aca podemos ver la asociatividad por completo
https://www.php.net/manual/es/language.operators.precedence.php
*/
$contador = 1;
$resultado = $contador++;

echo $resultado;

echo "\n";

echo 1 - 2 - 3; // como la resta suma y multipliocacion es de izquierda a derecha por tanto primero hara la resta de 1 - 2 y el resultado lo restara con - 3 
echo "\n";
// asociatividad de derecha a izqueirda
//$b = 5;
$c = 10;

$a = $b = $c; // la asignacion o signos de = y si semejantes como += tiene una asociatividad de derecha osea que primero b va a igualar lo que tiene c y su resultado se igualara a a

echo $a;
echo "\n";

$michis_4_patas = true;
$michis_programan_con_PHP = false;

$resultado = $michis_4_patas and $michis_programan_con_PHP; // esto da true por que primero esta generandose la asignacion y despues el operador logico and por eso da true
// si queremos primero que haga el operador logico podemos colocarlo dentro de un parentesis para que la precedencia de operadores primero tome el operador logico
var_dump($resultado); //true

echo "\n";
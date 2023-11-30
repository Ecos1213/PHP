<?php
/*

el problema del switch es que es polemico por que permite el codigo espagueti

pero cuando debemos usar switch?

usalo cuando:

1. necesites decidir entre un caso u otro 

2. quieras una forma fecil de plantear diversas situaciones

3. usarlo no signifique sacrificar la legibilidad de tu codigo

no lo uses cuando:

1. necesites hacer comparaciones complejas

2. quieras verificar un rango de numeros

3. necesites poner grandes bloques de codigo y/o tu codigo se vuelva ilegible

*/


//michi 1: 9
//michi 2 : 4
//michi 3 : 3
//michi 4: 9
//michi 5: 1

$michi = 4;

switch($michi) {
    case 1:
    case 4:
        echo "Su numero favorito es el 9";
        break;
    case 2:
        echo "Su numero favorito es el 4";
        break;
    case 3:
        echo "Su numero favorito es el 3";
        break;
    case 5:
        echo "Su numero favorito es el 1";
        break;
    default:
        echo "Ese michi no existre :c";
}


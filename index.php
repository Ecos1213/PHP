<?php

$valorA = 5;

if($valorA == 10) {
    echo "Es igual a 10 \n";
}else {
    echo "No es igual a 10 \n";
}

$i = 0;

while($i <= 10) { // por cada iteracion ejecutara el codico esto se le llama ciclo
    echo $i++;
}

echo "\n";

$i = 0;
do { // primero ejecuta la linea de codigo y despues hace la iteracion de cada ciclo
    echo $i++;
}while($i <= 10);

echo "\n";

$arr = array(1,2,3,4);
for($i=0; $i<4; $i++) {
    echo $arr[$i];
}

echo "\n";

foreach($arr as $value) {
    echo $value;
}

echo "\n";

switch($valorA) {
    case 1:
        echo "El valor es 1";
        break;
    case 2:
        echo "El valor es 2";
        break;
    case 3:
        echo "El valor es 3";
        break;
    default:
        echo "No es ninguno de los valores 1, 2 o 3";
        break;
}
echo "\n";

?>


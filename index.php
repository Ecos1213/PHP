<?php

/*for(;;) {
    //escribir todo nuestro codigo
    echo "algo";
} // si dejamos el ciclo de esta manera sera un ciclo infinito*/

for($contador = 0; $contador < 10; $contador++) {
    //escribir todo nuestro codigo
    echo $contador . "\n";
}

echo "\n";


for($contador = 10; $contador > 0; $contador--) {
    //escribir todo nuestro codigo
    echo $contador . "\n";
}

echo "\n";


for($i = 0, $j = 0; $i < 10; $i++, $j+=2) { // como vemos aqui mismo en el ciclo for podemos definir dos variables e incrementar las dos variables ya sean igual incremento y de distinta forma
    echo "i = $i j = $j" . "\n";
}